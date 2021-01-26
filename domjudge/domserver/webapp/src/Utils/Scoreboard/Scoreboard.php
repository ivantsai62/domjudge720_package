<?php declare(strict_types=1);

namespace App\Utils\Scoreboard;
use App\Entity\Contest;
use App\Entity\ContestProblem;
use App\Entity\ScoreCache;
use App\Entity\Team;
use App\Entity\TeamCategory;
use App\Utils\FreezeData;
use App\Utils\Utils;

/**
 * Class Scoreboard
 *
 * This class represents the whole scoreboard
 *
 * @package App\Utils\Scoreboard
 */
class Scoreboard
{
    /**
     * @var Contest
     */
    protected $contest;

    /**
     * @var Team[]
     */
    protected $teams;

    /**
     * @var TeamCategory[]
     */
    protected $categories;

    /**
     * @var ContestProblem[]
     */
    protected $problems;

    /**
     * @var ScoreCache[]
     */
    protected $scoreCache;

    /**
     * @var FreezeData
     */
    protected $freezeData;

    /**
     * @var bool
     */
    protected $restricted;

    /**
     * @var int
     */
    protected $penaltyTime;

    /**
     * @var bool
     */
    protected $scoreIsInSeconds;

    /**
     * @var ScoreboardMatrixItem[][]
     */
    protected $matrix = [];

    /**
     * @var Summary
     */
    protected $summary;

    /**
     * @var TeamScore[]
     */
    protected $scores = [];

    /**
     * @var array
     */
    protected $bestInCategoryData = null;



    /**
     * Scoreboard constructor.
     * @param Contest          $contest
     * @param Team[]           $teams
     * @param TeamCategory[]   $categories
     * @param ContestProblem[] $problems
     * @param ScoreCache[]     $scoreCache
     * @param FreezeData       $freezeData
     * @param bool             $jury
     * @param int              $penaltyTime
     * @param bool             $scoreIsInSeconds
     */
    public function __construct(
        Contest $contest,
        array $teams,
        array $categories,
        array $problems,
        array $scoreCache,
        FreezeData $freezeData,
        bool $jury,
        int $penaltyTime,
        bool $scoreIsInSeconds
        
    ) {
        $this->contest          = $contest;
        $this->teams            = $teams;
        $this->categories       = $categories;
        $this->problems         = $problems;
        $this->scoreCache       = $scoreCache;
        $this->freezeData       = $freezeData;
        $this->restricted       = $jury || $freezeData->showFinal($jury);
        $this->penaltyTime      = $penaltyTime;
        $this->scoreIsInSeconds = $scoreIsInSeconds;
        $this->initializeScoreboard();
        //public scoard的運算
        $this->calculateScoreboard();
    }

    /**
     * @return Team[]
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * @return TeamCategory[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @return ContestProblem[]
     */
    public function getProblems(): array
    {
        return $this->problems;
    }

    /**
     * @return ScoreboardMatrixItem[][]
     */
    public function getMatrix(): array
    {
        return $this->matrix;
    }

    /**
     * @return Summary
     */
    public function getSummary(): Summary
    {
        return $this->summary;
    }

    /**
     * @return TeamScore[]
     */
    public function getScores(): array
    {
        return $this->scores;
    }

    /**
     * @return FreezeData
     */
    public function getFreezeData(): FreezeData
    {
        return $this->freezeData;
    }

    /**CCU
     * @return Scorecache
    */

    public function getScorecache()
    {
        return $this->scoreCache; 
    }

    /**
     * Get the progress of this scoreboard
     * @return int
     */
    public function getProgress()
    {
        $now = Utils::now();
        if (!$this->freezeData->started()) {
            return -1;
        }
        $left = Utils::difftime((float)$this->contest->getEndtime(), $now);
        if ($left <= 0) {
            return 100;
        }

        $passed   = Utils::difftime((float)$this->contest->getStarttime(), $now);
        $duration = Utils::difftime((float)$this->contest->getStarttime(),
                                    (float)$this->contest->getEndtime());
        return (int)($passed * 100. / $duration);
    }

    /**
     * Initialize the scoreboard data
     */
    protected function initializeScoreboard()
    {
        // Initialize summary
        $this->summary = new Summary($this->problems);

        // Initialize scores
        $this->scores = [];
        foreach ($this->teams as $team) {
            $this->scores[$team->getTeamid()] = new TeamScore($team);
        }
    }

    /**
     * Calculate the scoreboard data, filling the summary, matrix and scores properties
     */
    protected function calculateScoreboard()
    {
        // Calculate matrix and update scores
        $this->matrix = [];
        foreach ($this->scoreCache as $scoreRow) {
            $teamId = $scoreRow->getTeam()->getTeamid();
            $probId = $scoreRow->getProblem()->getProbid();
            // Skip this row if the team or problem is not known by us
            if (!array_key_exists($teamId, $this->teams) ||
                !array_key_exists($probId, $this->problems)) {
                continue;
            }

            $penalty = Utils::calcPenaltyTime(
                $scoreRow->getIsCorrect($this->restricted),
                $scoreRow->getSubmissions($this->restricted),
                $this->penaltyTime, $this->scoreIsInSeconds
            );

            $this->matrix[$teamId][$probId] = new ScoreboardMatrixItem(
                $scoreRow->getIsCorrect($this->restricted),
                $scoreRow->getIsCorrect($this->restricted) ? $scoreRow->getIsFirstToSolve() : false,
                $scoreRow->getSubmissions($this->restricted),
                $scoreRow->getPending($this->restricted),
                $scoreRow->getSolveTime($this->restricted),
                $scoreRow->getAllTaskPoint(),
                $penalty
            );
            //$rankCache  = $this->getRankcache($scoreRow->getContest(), $scoreRow->getTeam());
            if ($scoreRow->getIsCorrect($this->restricted)) {
                $solveTime      = Utils::scoretime($scoreRow->getSolveTime($this->restricted),
                                                   $this->scoreIsInSeconds);
                $contestProblem = $this->problems[$scoreRow->getProblem()->getProbid()];
                 
                $this->scores[$teamId]->addNumberOfPoints($contestProblem->getPoints() );
                $this->scores[$teamId]->addSolveTime($solveTime);
                $this->scores[$teamId]->addTotalTime($solveTime + $penalty);
            }
            //CCU compute subtask point 
            else if ($scoreRow->getIsCorrect($this->restricted) == $scoreRow->getIsCorrect(!$this->restricted) && $scoreRow->getIsCorrect(!$this->restricted) == 0)
            {
                if ($scoreRow->getProblem()->getSubtask() != 0 && $scoreRow->getProblem()->getSubtask() != null)
                {
                    $contestProblem = $this->problems[$scoreRow->getProblem()->getProbid()];

                    $points = $contestProblem->getPoints();
                    $all_task_point = $scoreRow->getAllTaskPoint();
                    if(isset($all_task_point[1])&&isset($all_task_point[0]))
                    {
                    $subpoints = round($all_task_point[1]/$all_task_point[0]*$points);
                    
                    if (isset($subpoints))
                    {
                    $this->scores[$teamId]->addNumberOfPoints((int)$subpoints);
                    }
                    }
                }
            }
        }

        // Now sort the scores using the scoreboard sort function
        uasort($this->scores, [static::class, 'scoreboardCompare']);

        // Loop over all teams to calculate ranks and totals
        $prevSortOrder  = -1;
        $rank           = 0;
        $previousTeamId = null;
        foreach ($this->scores as $teamScore) {
            $teamId = $teamScore->getTeam()->getTeamid();
            $teamSortOrder = $teamScore->getTeam()->getCategory()->getSortorder();
            // rank, team name, total correct, total time
            if ($teamSortOrder != $prevSortOrder) {
                $prevSortOrder  = $teamSortOrder;
                $rank           = 0; // reset team position on switch to different category
                $previousTeamId = null;
            }
            $rank++;

            // Use previous team rank when scores are equal
            if (isset($previousTeamId) &&
                $this->scoreCompare($this->scores[$previousTeamId], $teamScore) == 0) {
                $teamScore->setRank($rank);
                $teamScore->setRank($this->scores[$previousTeamId]->getRank());
            } else {
                $teamScore->setRank($rank);
            }
            $previousTeamId = $teamId;

            // Keep summary statistics for the bottom row of our table
            // The numberOfPoints summary is useful only if they're all 1-point problems.
            $sortOrder = $teamScore->getTeam()->getCategory()->getSortorder();
            $this->summary->addNumberOfPoints($sortOrder, $teamScore->getNumberOfPoints());
            $teamAffiliation = $teamScore->getTeam()->getAffiliation();
            if ($teamAffiliation) {
                $this->summary->incrementAffiliationValue($teamAffiliation->getAffilid());
                if ($teamAffiliation->getCountry()) {
                    $this->summary->incrementCountryValue($teamAffiliation->getCountry());
                }
            }

            // Loop over the problems
            foreach ($this->problems as $contestProblem) {
                $problemId = $contestProblem->getProbid();
                // Provide default scores when nothing submitted for this team + problem yet
                if (!isset($this->matrix[$teamId][$problemId])) {
                    $this->matrix[$teamId][$problemId] = new ScoreboardMatrixItem(false, false, 0, 0, 0, 0, 0);
                }

                $problemMatrixItem = $this->matrix[$teamId][$problemId];
                $problemSummary    = $this->summary->getProblem($problemId);

                $problemSummary->addSubmissionCounts(
                    $sortOrder,
                    $problemMatrixItem->getNumberOfSubmissions(),
                    $problemMatrixItem->getNumberOfPendingSubmissions(),
                    $problemMatrixItem->isCorrect() ? 1 : 0
                );
                if ($problemMatrixItem->isFirst()) {
                    $problemSummary->updateBestTime($sortOrder, $problemMatrixItem->getTime());
                }
            }
        }
    }

    /**
     * Scoreboard sorting function. It uses the following
     * criteria:
     * - First, use the sortorder override from the team_category table
     *   (e.g. score regular contestants always over spectators);
     * - Then, use the scoreCompare function to determine the actual ordering
     *   based on number of problems solved and the time it took;
     * - If still equal, order on team name alphabetically.
     * @param TeamScore $a
     * @param TeamScore $b
     * @return int
     */
    protected static function scoreboardCompare(TeamScore $a, TeamScore $b)
    {
        // First order by our predefined sortorder based on category
        $a_sortorder = $a->getTeam()->getCategory()->getSortorder();
        $b_sortorder = $b->getTeam()->getCategory()->getSortorder();
        if ($a_sortorder != $b_sortorder) {
            return $a_sortorder <=> $b_sortorder;
        }

        // Then compare scores
        $scoreCompare = static::scoreCompare($a, $b);
        if ($scoreCompare != 0) {
            return $scoreCompare;
        }

        // Else, order by teamname alphabetically
        if ($a->getTeam()->getName() != $b->getTeam()->getName()) {
            $collator = new \Collator('en');
            return $collator->compare($a->getTeam()->getName(), $b->getTeam()->getName());
        }
        // Undecided, should never happen in practice
        return 0;
    }

    /**
     * Main score comparison function, called from the 'scoreboardCompare' wrapper
     * above. Scores based on the following criteria:
     * - highest points from correct solutions;
     * - least amount of total time spent on these solutions;
     * - the tie-breaker function below
     * @param TeamScore $a
     * @param TeamScore $b
     * @return int
     */
    protected static function scoreCompare(TeamScore $a, TeamScore $b): int
    {
        // More correctness points than someone else means higher rank
        if ($a->getNumberOfPoints() != $b->getNumberOfPoints()) {
            return $b->getNumberOfPoints() <=> $a->getNumberOfPoints();
        }
        // Else, less time spent means higher rank
        if ($a->getTotalTime() != $b->getTotalTime()) {
            return $a->getTotalTime() <=> $b->getTotalTime();
        }
        // Else tie-breaker rule
        return static::scoreTiebreaker($a, $b);
    }

    /**
     * Tie-breaker comparison function, called from the 'scoreCompare' function
     * above. Scores based on the following criterion:
     * - fastest submission time for latest correct problem
     * @param TeamScore $a
     * @param TeamScore $b
     * @return int
     */
    public static function scoreTiebreaker(TeamScore $a, TeamScore $b): int
    {
        $atimes = $a->getSolveTimes();
        $btimes = $b->getSolveTimes();
        rsort($atimes);
        rsort($btimes);

        if (isset($atimes[0]) && isset($btimes[0])) {
            return $atimes[0] <=> $btimes[0];
        }
        if (!isset($atimes[0]) && !isset($btimes[0])) {
            return 0;
        }
        if (!isset($atimes[0])) return -1;
        if (!isset($btimes[0])) return 1;

        throw new Exception('Unhandled tie breaker case.');
    }

    /**
     * Return whether to show points for this scoreboard
     * @return bool
     */
    public function showPoints(): bool
    {
        foreach ($this->problems as $problem) {
            if ($problem->getPoints() != 1) {
                return true;
            }
        }

        return false;
    }

    /**
     * Return the used team categories for this scoreboard
     * @param array|null $limitToTeamIds
     * @return TeamCategory[]
     */
    public function getUsedCategories(array $limitToTeamIds = null)
    {
        $usedCategories = [];
        foreach ($this->scores as $score) {
            // skip if we have limitteams and the team is not listed
            if (!empty($limitToTeamIds) &&
                !in_array($score->getTeam()->getTeamid(), $limitToTeamIds)) {
                continue;
            }

            if ($score->getTeam()->getCategory()) {
                $category = $score->getTeam()->getCategory();
                $usedCategories[$category->getCategoryid()] = $category;
            }
        }

        return $usedCategories;
    }

    /**
     * Return whether this scoreboard has multiple category colors.
     * @param array|null $limitToTeamIds
     * @return bool
     */
    public function hasCategoryColors(array $limitToTeamIds = null): bool
    {
        $colors = [];
        foreach ($this->scores as $score) {
            // skip if we have limitteams and the team is not listed
            if (!empty($limitToTeamIds) &&
                !in_array($score->getTeam()->getTeamid(), $limitToTeamIds)) {
                continue;
            }

            if ($score->getTeam()->getCategory() &&
                $score->getTeam()->getCategory()->getColor()) {
                $colors[$score->getTeam()->getCategory()->getColor()] = 1;
            } else {
                $colors['transparent'] = 1;
            }
        }

        return count($colors) > 1;
    }

    /**
     * Determine whether this team is the best in the given category
     * @param Team       $team
     * @param array|null $limitToTeamIds
     * @return bool
     */
    public function isBestInCategory(Team $team, array $limitToTeamIds = null): bool
    {
        if ($this->bestInCategoryData === null) {
            $this->bestInCategoryData = [];
            foreach ($this->scores as $score) {
                // skip if we have limitteams and the team is not listed
                if (!empty($limitToTeamIds) &&
                    !in_array($score->getTeam()->getTeamid(), $limitToTeamIds)) {
                    continue;
                }

                $categoryId = $score->getTeam()->getCategoryid();
                if (!isset($this->bestInCategoryData[$categoryId])) {
                    $this->bestInCategoryData[$categoryId] = $score->getTeam()->getTeamid();
                }
            }
        }

        $categoryId = $team->getCategoryid();
        // Only check the scores when the team has points
        if ($this->scores[$team->getTeamid()]->getNumberOfPoints()) {
            // If the rank of this team is equal to the best team for this
            // category, this team is best in that category
            return $this->scores[$this->bestInCategoryData[$categoryId]]->getRank() ===
                $this->scores[$team->getTeamid()]->getRank();
        }

        return false;
    }

    /**
     * Determine whether this team was the first team to solve this problem
     * @param Team           $team
     * @param ContestProblem $problem
     * @return bool
     */
    public function solvedFirst(Team $team, ContestProblem $problem): bool
    {
        return $this->matrix[$team->getTeamid()][$problem->getProbid()]->isFirst();
    }



}