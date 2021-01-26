<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/v4/contests' => [
            [['_route' => 'app_api_contest_addcontest', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_contest_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::listAction'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v4/version' => [[['_route' => 'app_api_generalinfo_getversion', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/info' => [[['_route' => 'app_api_generalinfo_getinfo', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4' => [[['_route' => 'api_root', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/status' => [[['_route' => 'app_api_generalinfo_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/user' => [[['_route' => 'app_api_generalinfo_getuser', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config' => [[['_route' => 'app_api_generalinfo_getdatabaseconfiguration', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config/check' => [[['_route' => 'app_api_generalinfo_getconfigcheck', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/judgehosts' => [
            [['_route' => 'app_api_judgehost_getjudgehosts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_judgehost_createjudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v4/users/groups' => [[['_route' => 'app_api_user_addgroup', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addGroupAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/teams' => [[['_route' => 'app_api_user_addteams', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/accounts' => [[['_route' => 'app_api_user_addaccounts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users' => [[['_route' => 'app_api_user_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/analysis' => [[['_route' => 'analysis_index', '_controller' => 'App\\Controller\\Jury\\AnalysisController::indexAction'], null, null, null, false, false, null]],
        '/jury/auditlog' => [[['_route' => 'jury_auditlog', '_controller' => 'App\\Controller\\Jury\\AuditLogController::indexAction'], null, null, null, false, false, null]],
        '/jury/balloons' => [[['_route' => 'jury_balloons', '_controller' => 'App\\Controller\\Jury\\BalloonController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications' => [[['_route' => 'jury_clarifications', '_controller' => 'App\\Controller\\Jury\\ClarificationController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications/send' => [
            [['_route' => 'jury_clarification_new', '_controller' => 'App\\Controller\\Jury\\ClarificationController::composeClarificationAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'jury_clarification_send', '_controller' => 'App\\Controller\\Jury\\ClarificationController::sendAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/jury/config' => [[['_route' => 'jury_config', '_controller' => 'App\\Controller\\Jury\\ConfigController::indexAction'], null, null, null, false, false, null]],
        '/jury/config/check' => [[['_route' => 'jury_config_check', '_controller' => 'App\\Controller\\Jury\\ConfigController::checkAction'], null, null, null, false, false, null]],
        '/jury/config/check/phpinfo' => [[['_route' => 'jury_config_phpinfo', '_controller' => 'App\\Controller\\Jury\\ConfigController::phpinfoAction'], null, null, null, false, false, null]],
        '/jury/contests' => [[['_route' => 'jury_contests', '_controller' => 'App\\Controller\\Jury\\ContestController::indexAction'], null, null, null, false, false, null]],
        '/jury/contests/add' => [[['_route' => 'jury_contest_add', '_controller' => 'App\\Controller\\Jury\\ContestController::addAction'], null, null, null, false, false, null]],
        '/jury/executables' => [[['_route' => 'jury_executables', '_controller' => 'App\\Controller\\Jury\\ExecutableController::indexAction'], null, null, null, false, false, null]],
        '/jury/import-export' => [[['_route' => 'jury_import_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::indexAction'], null, null, null, false, false, null]],
        '/jury/import-export/contest-yaml' => [[['_route' => 'jury_import_export_yaml', '_controller' => 'App\\Controller\\Jury\\ImportExportController::contestYamlAction'], null, null, null, false, false, null]],
        '/jury/internal-errors' => [[['_route' => 'jury_internal_errors', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts' => [[['_route' => 'jury_judgehosts', '_controller' => 'App\\Controller\\Jury\\JudgehostController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/add/multiple' => [[['_route' => 'jury_judgehost_add', '_controller' => 'App\\Controller\\Jury\\JudgehostController::addMultipleAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/edit/multiple' => [[['_route' => 'jury_judgehost_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostController::editMultipleAction'], null, null, null, false, false, null]],
        '/jury/judgehost-restrictions' => [[['_route' => 'jury_judgehost_restrictions', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehost-restrictions/add' => [[['_route' => 'jury_judgehost_restriction_add', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::addAction'], null, null, null, false, false, null]],
        '/jury' => [[['_route' => 'jury_index', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::indexAction'], null, null, null, false, false, null]],
        '/jury/updates' => [[['_route' => 'jury_ajax_updates', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::updatesAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/refresh-cache' => [[['_route' => 'jury_refresh_cache', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::refreshCacheAction'], null, null, null, false, false, null]],
        '/jury/judging-verifier' => [[['_route' => 'jury_judging_verifier', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::judgingVerifierAction'], null, null, null, false, false, null]],
        '/jury/languages' => [[['_route' => 'jury_languages', '_controller' => 'App\\Controller\\Jury\\LanguageController::indexAction'], null, null, null, false, false, null]],
        '/jury/languages/add' => [[['_route' => 'jury_language_add', '_controller' => 'App\\Controller\\Jury\\LanguageController::addAction'], null, null, null, false, false, null]],
        '/jury/print' => [[['_route' => 'jury_print', '_controller' => 'App\\Controller\\Jury\\PrintController::showAction'], null, null, null, false, false, null]],
        '/jury/problems' => [[['_route' => 'jury_problems', '_controller' => 'App\\Controller\\Jury\\ProblemController::indexAction'], null, null, null, false, false, null]],
        '/jury/problems/add' => [[['_route' => 'jury_problem_add', '_controller' => 'App\\Controller\\Jury\\ProblemController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings' => [[['_route' => 'jury_rejudgings', '_controller' => 'App\\Controller\\Jury\\RejudgingController::indexAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/add' => [[['_route' => 'jury_rejudging_add', '_controller' => 'App\\Controller\\Jury\\RejudgingController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/create' => [[['_route' => 'jury_create_rejudge', '_controller' => 'App\\Controller\\Jury\\RejudgingController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/jury/scoreboard' => [[['_route' => 'jury_scoreboard', '_controller' => 'App\\Controller\\Jury\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/jury/shadow-differences' => [[['_route' => 'jury_shadow_differences', '_controller' => 'App\\Controller\\Jury\\ShadowDifferencesController::indexAction'], null, null, null, false, false, null]],
        '/jury/submissions' => [[['_route' => 'jury_submissions', '_controller' => 'App\\Controller\\Jury\\SubmissionController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations' => [[['_route' => 'jury_team_affiliations', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations/add' => [[['_route' => 'jury_team_affiliation_add', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::addAction'], null, null, null, false, false, null]],
        '/jury/categories' => [[['_route' => 'jury_team_categories', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::indexAction'], null, null, null, false, false, null]],
        '/jury/categories/add' => [[['_route' => 'jury_team_category_add', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::addAction'], null, null, null, false, false, null]],
        '/jury/teams' => [[['_route' => 'jury_teams', '_controller' => 'App\\Controller\\Jury\\TeamController::indexAction'], null, null, null, false, false, null]],
        '/jury/teams/add' => [[['_route' => 'jury_team_add', '_controller' => 'App\\Controller\\Jury\\TeamController::addAction'], null, null, null, false, false, null]],
        '/jury/users' => [[['_route' => 'jury_users', '_controller' => 'App\\Controller\\Jury\\UserController::indexAction'], null, null, null, false, false, null]],
        '/jury/users/add' => [[['_route' => 'jury_user_add', '_controller' => 'App\\Controller\\Jury\\UserController::addAction'], null, null, null, false, false, null]],
        '/jury/users/generate-passwords' => [[['_route' => 'jury_generate_passwords', '_controller' => 'App\\Controller\\Jury\\UserController::generatePasswordsAction'], null, null, null, false, false, null]],
        '/public' => [[['_route' => 'public_index', '_controller' => 'App\\Controller\\PublicController::scoreboardAction'], null, null, null, false, false, null]],
        '/public/problems' => [[['_route' => 'public_problems', '_controller' => 'App\\Controller\\PublicController::problemsAction'], null, null, null, false, false, null]],
        '/publicpublic_index_test' => [[['_route' => 'public_index_test', '_controller' => 'App\\Controller\\PublicController::indexAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::redirectAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::registerAction'], null, null, null, false, false, null]],
        '/team/clarifications/add' => [[['_route' => 'team_clarification_add', '_controller' => 'App\\Controller\\Team\\ClarificationController::addAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\Team\\MiscController::homeAction'], null, null, null, false, false, null]],
        '/team/print' => [[['_route' => 'team_print', '_controller' => 'App\\Controller\\Team\\MiscController::printAction'], null, null, null, false, false, null]],
        '/teamteam_index_test' => [[['_route' => 'team_index_test', '_controller' => 'App\\Controller\\Team\\MiscController::indexAction'], null, null, null, false, false, null]],
        '/team/problems' => [[['_route' => 'team_problems', '_controller' => 'App\\Controller\\Team\\ProblemController::problemsAction'], null, null, null, false, false, null]],
        '/team/scoreboard' => [[['_route' => 'team_scoreboard', '_controller' => 'App\\Controller\\Team\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/team/submit' => [[['_route' => 'team_submit', '_controller' => 'App\\Controller\\Team\\SubmissionController::createAction'], null, null, null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api(?'
                    .'|/(?'
                        .'|v(?'
                            .'|4/(?'
                                .'|contests/([^/]++)(?'
                                    .'|/(?'
                                        .'|awards(?'
                                            .'|(*:222)'
                                            .'|/([^/]++)(*:239)'
                                        .')'
                                        .'|c(?'
                                            .'|larifications(?'
                                                .'|(*:268)'
                                                .'|/([^/]++)(*:285)'
                                            .')'
                                            .'|ontest\\-yaml(*:306)'
                                        .')'
                                        .'|s(?'
                                            .'|tat(?'
                                                .'|e(*:326)'
                                                .'|us(*:336)'
                                            .')'
                                            .'|coreboard(*:354)'
                                            .'|ubmissions(?'
                                                .'|(*:375)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:395)'
                                                    .'|/(?'
                                                        .'|files(*:412)'
                                                        .'|source\\-code(*:432)'
                                                    .')'
                                                .')'
                                                .'|(*:442)'
                                            .')'
                                        .')'
                                        .'|event\\-feed(*:463)'
                                        .'|groups(?'
                                            .'|(*:480)'
                                            .'|/([^/]++)(*:497)'
                                        .')'
                                        .'|judgement(?'
                                            .'|s(?'
                                                .'|(*:522)'
                                                .'|/([^/]++)(*:539)'
                                            .')'
                                            .'|\\-types(?'
                                                .'|(*:558)'
                                                .'|/([^/]++)(*:575)'
                                            .')'
                                        .')'
                                        .'|languages(?'
                                            .'|(*:597)'
                                            .'|/([^/]++)(*:614)'
                                        .')'
                                        .'|organizations(?'
                                            .'|(*:639)'
                                            .'|/([^/]++)(*:656)'
                                        .')'
                                        .'|problems(?'
                                            .'|(*:676)'
                                            .'|/([^/]++)(*:693)'
                                        .')'
                                        .'|runs(?'
                                            .'|(*:709)'
                                            .'|/([^/]++)(*:726)'
                                        .')'
                                        .'|teams(?'
                                            .'|(*:743)'
                                            .'|/([^/]++)(*:760)'
                                        .')'
                                    .')'
                                    .'|(*:770)'
                                .')'
                                .'|executables/([^/]++)(*:799)'
                                .'|judgehosts/(?'
                                    .'|([^/]++)(*:829)'
                                    .'|next\\-judging/([^/]++)(*:859)'
                                    .'|update\\-judging/([^/]++)/(\\d+)(*:897)'
                                    .'|add\\-judging\\-run/([^/]++)/(\\d+)(*:937)'
                                    .'|internal\\-error(*:960)'
                                .')'
                                .'|testcases/(?'
                                    .'|next\\-to\\-judge/([^/]++)(*:1006)'
                                    .'|([^/]++)/file/([^/]++)(*:1037)'
                                .')'
                                .'|users/([^/]++)(*:1061)'
                            .')'
                            .'|ersion(?:\\.(json|xml|html))?(*:1099)'
                        .')'
                        .'|contests(?'
                            .'|/([^/]++)/(?'
                                .'|awards(?'
                                    .'|(?:\\.(json|xml|html))?(*:1164)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1206)'
                                .')'
                                .'|clarifications(?'
                                    .'|(?:\\.(json|xml|html))?(*:1255)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1297)'
                                .')'
                            .')'
                            .'|(?:\\.(json|xml|html))?(?'
                                .'|(*:1333)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(?'
                                    .'|(*:1382)'
                                .')'
                                .'|([^/]++)/(?'
                                    .'|contest\\-yaml(?:\\.(json|xml|html))?(*:1439)'
                                    .'|stat(?'
                                        .'|e(?:\\.(json|xml|html))?(*:1478)'
                                        .'|us(?:\\.(json|xml|html))?(*:1511)'
                                    .')'
                                    .'|event\\-feed(?:\\.(json|xml|html))?(*:1554)'
                                .')'
                            .')'
                        .')'
                        .'|executables/([^/\\.]++)(?:\\.(json|xml|html))?(*:1610)'
                        .'|info(?:\\.(json|xml|html))?(*:1645)'
                    .')'
                    .'|(?:\\.(json|xml|html))?(*:1677)'
                    .'|/(?'
                        .'|status(?:\\.(json|xml|html))?(*:1718)'
                        .'|user(?'
                            .'|(?:\\.(json|xml|html))?(*:1756)'
                            .'|s(?'
                                .'|/(?'
                                    .'|groups(?:\\.(json|xml|html))?(*:1801)'
                                    .'|teams(?:\\.(json|xml|html))?(*:1837)'
                                    .'|accounts(?:\\.(json|xml|html))?(*:1876)'
                                .')'
                                .'|(?:\\.(json|xml|html))?(*:1908)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1950)'
                            .')'
                        .')'
                        .'|con(?'
                            .'|fig(?'
                                .'|(?:\\.(json|xml|html))?(*:1995)'
                                .'|/check(?:\\.(json|xml|html))?(*:2032)'
                            .')'
                            .'|tests/([^/]++)/(?'
                                .'|groups(?'
                                    .'|(?:\\.(json|xml|html))?(*:2091)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2133)'
                                .')'
                                .'|judgement(?'
                                    .'|s(?'
                                        .'|(?:\\.(json|xml|html))?(*:2181)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2223)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(?:\\.(json|xml|html))?(*:2265)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2307)'
                                    .')'
                                .')'
                                .'|languages(?'
                                    .'|(?:\\.(json|xml|html))?(*:2352)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2394)'
                                .')'
                                .'|organizations(?'
                                    .'|(?:\\.(json|xml|html))?(*:2442)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2484)'
                                .')'
                                .'|problems(?'
                                    .'|(?:\\.(json|xml|html))?(?'
                                        .'|(*:2530)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2573)'
                                .')'
                                .'|runs(?'
                                    .'|(?:\\.(json|xml|html))?(*:2612)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2654)'
                                .')'
                                .'|s(?'
                                    .'|coreboard(?:\\.(json|xml|html))?(*:2699)'
                                    .'|ubmissions(?'
                                        .'|(?:\\.(json|xml|html))?(*:2743)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2785)'
                                        .'|(?:\\.(json|xml|html))?(*:2816)'
                                        .'|/([^/]++)/(?'
                                            .'|files(?:\\.(json|xml|html))?(*:2865)'
                                            .'|source\\-code(?:\\.(json|xml|html))?(*:2908)'
                                        .')'
                                    .')'
                                .')'
                                .'|teams(?'
                                    .'|(?:\\.(json|xml|html))?(*:2950)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2992)'
                                .')'
                            .')'
                        .')'
                        .'|judgehosts(?'
                            .'|(?:\\.(json|xml|html))?(*:3039)'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(*:3084)'
                                .'|update\\-judging/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:3145)'
                                .'|add\\-judging\\-run/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:3208)'
                                .'|internal\\-error(?:\\.(json|xml|html))?(*:3254)'
                            .')'
                            .'|(?:\\.(json|xml|html))?(*:3286)'
                            .'|/next\\-judging/([^/\\.]++)(?:\\.(json|xml|html))?(*:3342)'
                        .')'
                        .'|testcases/(?'
                            .'|next\\-to\\-judge/([^/\\.]++)(?:\\.(json|xml|html))?(*:3413)'
                            .'|([^/]++)/file/([^/\\.]++)(?:\\.(json|xml|html))?(*:3468)'
                        .')'
                    .')'
                .')'
                .'|/jury/(?'
                    .'|a(?'
                        .'|nalysis/(?'
                            .'|team/([^/]++)(*:3517)'
                            .'|problem/([^/]++)(*:3542)'
                        .')'
                        .'|jax/([^/]++)(*:3564)'
                        .'|ffiliations/(?'
                            .'|(\\d+)(*:3593)'
                            .'|(\\d+)/edit(*:3612)'
                            .'|(\\d+)/delete(*:3633)'
                        .')'
                    .')'
                    .'|balloons/([^/]++)/done(*:3666)'
                    .'|c(?'
                        .'|larifications/(?'
                            .'|(\\d+)(*:3701)'
                            .'|(\\d+)/claim(*:3721)'
                            .'|(\\d+)/set\\-answered(*:3749)'
                            .'|(\\d+)/change\\-subject(*:3779)'
                            .'|(\\d+)/change\\-queue(*:3807)'
                        .')'
                        .'|ontests/(?'
                            .'|(\\d+)(*:3833)'
                            .'|(\\d+)/remove\\-interval/([^/]++)(*:3873)'
                            .'|(\\d+)/edit(*:3892)'
                            .'|(\\d+)/delete(*:3913)'
                            .'|(\\d+)/problems/(\\d+)/delete(*:3949)'
                            .'|(\\d+)/finalize(*:3972)'
                        .')'
                        .'|hange\\-contest/(-?\\d+)(*:4004)'
                        .'|ategories/(?'
                            .'|(\\d+)(*:4031)'
                            .'|(\\d+)/edit(*:4050)'
                            .'|(\\d+)/delete(*:4071)'
                        .')'
                    .')'
                    .'|executables/([^/]++)(?'
                        .'|(*:4105)'
                        .'|/(?'
                            .'|content(*:4125)'
                            .'|d(?'
                                .'|ownload(?'
                                    .'|(*:4148)'
                                    .'|/([^/]++)(*:4166)'
                                .')'
                                .'|elete(*:4181)'
                            .')'
                            .'|edit(?'
                                .'|(*:4198)'
                                .'|\\-files(*:4214)'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export/export/(?'
                            .'|(groups|teams|scoreboard|results)\\.tsv(*:4292)'
                            .'|(results|results-icpc|clarifications)\\.html(*:4344)'
                        .')'
                        .'|nternal\\-errors/(?'
                            .'|(\\d+)(*:4378)'
                            .'|(\\d+)/(ignore|resolve)(*:4409)'
                        .')'
                    .')'
                    .'|judgehost(?'
                        .'|s/(?'
                            .'|([^/]++)(?'
                                .'|(*:4448)'
                                .'|/(?'
                                    .'|de(?'
                                        .'|lete(*:4470)'
                                        .'|activate(*:4487)'
                                    .')'
                                    .'|activate(*:4505)'
                                .')'
                            .')'
                            .'|activate\\-all(*:4529)'
                            .'|deactivate\\-all(*:4553)'
                        .')'
                        .'|\\-restrictions/(?'
                            .'|(\\d+)(*:4586)'
                            .'|(\\d+)/edit(*:4605)'
                            .'|(\\d+)/delete(*:4626)'
                        .')'
                    .')'
                    .'|languages/([^/]++)(?'
                        .'|(*:4658)'
                        .'|/(?'
                            .'|toggle\\-(?'
                                .'|submit(*:4688)'
                                .'|judge(*:4702)'
                            .')'
                            .'|edit(*:4716)'
                            .'|delete(*:4731)'
                        .')'
                    .')'
                    .'|problems/(?'
                        .'|(\\d+)/export(*:4766)'
                        .'|(\\d+)(*:4780)'
                        .'|(\\d+)/text(*:4799)'
                        .'|(\\d+)/testcases(*:4823)'
                        .'|(\\d+)/testcases/(\\d+)/move/(up|down)(*:4868)'
                        .'|(\\d+)/testcases/(\\d+)/fetch/(input|output|image)(*:4925)'
                        .'|(\\d+)/edit(*:4944)'
                        .'|(\\d+)/delete(*:4965)'
                    .')'
                    .'|rejudgings/(?'
                        .'|(\\d+)(*:4994)'
                        .'|(\\d+)/(cancel|apply)(*:5023)'
                    .')'
                    .'|submissions/(?'
                        .'|(\\d+)(*:5053)'
                        .'|by\\-(?'
                            .'|judging\\-id/([^/]++)(*:5089)'
                            .'|external\\-id/([^/]++)(*:5119)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|runs/([^/]++)/([^/]++)/team\\-output(*:5176)'
                            .'|source(*:5191)'
                            .'|edit\\-source(*:5212)'
                        .')'
                        .'|(\\d+)/update\\-status(*:5242)'
                        .'|(\\d+)/verify(*:5263)'
                    .')'
                    .'|teams/(?'
                        .'|(\\d+)(*:5287)'
                        .'|(\\d+)/edit(*:5306)'
                        .'|(\\d+)/delete(*:5327)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:5351)'
                        .'|(\\d+)/edit(*:5370)'
                        .'|(\\d+)/delete(*:5391)'
                    .')'
                .')'
                .'|/public/(?'
                    .'|change\\-contest/(-?\\d+)(*:5436)'
                    .'|team/(\\d+)(*:5455)'
                    .'|problems/(\\d+)/text(*:5483)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5525)'
                    .'|(\\d+)/samples\\.zip(*:5552)'
                .')'
                .'|/team/(?'
                    .'|c(?'
                        .'|larifications/(\\d+)(*:5594)'
                        .'|hange\\-contest/(-?\\d+)(*:5625)'
                    .')'
                    .'|problems/(\\d+)/text(*:5654)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5696)'
                    .'|(\\d+)/samples\\.zip(*:5723)'
                    .'|problem_list/(\\d+)(*:5750)'
                    .'|team/(\\d+)(*:5769)'
                    .'|submission/(\\d+)(*:5794)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        222 => [[['_route' => 'app_api_awards_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        239 => [[['_route' => 'app_api_awards_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'app_api_clarification_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        285 => [[['_route' => 'app_api_clarification_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'app_api_contest_getcontestyaml', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        326 => [[['_route' => 'app_api_contest_getconteststate', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        336 => [[['_route' => 'app_api_contest_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        354 => [[['_route' => 'app_api_scoreboard_getscoreboard', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        375 => [[['_route' => 'app_api_submission_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        395 => [[['_route' => 'app_api_submission_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'submission_files', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        432 => [[['_route' => 'app_api_submission_getsubmissionsourcecode', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        442 => [[['_route' => 'app_api_submission_addsubmission', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction'], ['cid'], ['POST' => 0], null, false, false, null]],
        463 => [[['_route' => 'app_api_contest_geteventfeed', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        480 => [[['_route' => 'app_api_group_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        497 => [[['_route' => 'app_api_group_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_api_judgement_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        539 => [[['_route' => 'app_api_judgement_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        558 => [[['_route' => 'app_api_judgementtype_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        575 => [[['_route' => 'app_api_judgementtype_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        597 => [[['_route' => 'app_api_language_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        614 => [[['_route' => 'app_api_language_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        639 => [[['_route' => 'app_api_organization_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        656 => [[['_route' => 'app_api_organization_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        676 => [
            [['_route' => 'app_api_problem_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::listAction'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_problem_addproblem', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        693 => [[['_route' => 'app_api_problem_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        709 => [[['_route' => 'app_api_run_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        726 => [[['_route' => 'app_api_run_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        743 => [[['_route' => 'app_api_team_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        760 => [[['_route' => 'app_api_team_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        770 => [
            [['_route' => 'app_api_contest_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::singleAction'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_contest_changestarttime', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        799 => [[['_route' => 'app_api_executable_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        829 => [[['_route' => 'app_api_judgehost_updatejudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        859 => [[['_route' => 'app_api_judgehost_getnextjudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction'], ['hostname'], ['POST' => 0], null, false, true, null]],
        897 => [[['_route' => 'app_api_judgehost_updatejudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction'], ['hostname', 'judgingId'], ['PUT' => 0], null, false, true, null]],
        937 => [[['_route' => 'app_api_judgehost_addjudgingrun', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction'], ['hostname', 'judgingId'], ['POST' => 0], null, false, true, null]],
        960 => [[['_route' => 'app_api_judgehost_internalerror', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction'], [], ['POST' => 0], null, false, false, null]],
        1006 => [[['_route' => 'app_api_testcase_getnexttojudge', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1037 => [[['_route' => 'app_api_testcase_getfile', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        1061 => [[['_route' => 'app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1099 => [[['_route' => 'general_get_version', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1164 => [[['_route' => 'scoreboard_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1206 => [[['_route' => 'scoreboard_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1255 => [[['_route' => 'clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1297 => [[['_route' => 'clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1333 => [
            [['_route' => 'contest_add_contest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1382 => [
            [['_route' => 'contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'contest_change_start_time', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1439 => [[['_route' => 'contest_get_contest_yaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1478 => [[['_route' => 'contest_get_contest_state', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1511 => [[['_route' => 'contest_get_status', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1554 => [[['_route' => 'contest_get_event_feed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1610 => [[['_route' => 'executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1645 => [[['_route' => 'general_get_info', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1677 => [[['_route' => 'general_get_infoapi_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1718 => [[['_route' => 'general_get_status', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1756 => [[['_route' => 'general_get_user', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1801 => [[['_route' => 'user_add_group', '_controller' => 'App\\Controller\\API\\UserController::addGroupAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1837 => [[['_route' => 'user_add_teams', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1876 => [[['_route' => 'user_add_accounts', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1908 => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\API\\UserController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1950 => [[['_route' => 'user_single', '_controller' => 'App\\Controller\\API\\UserController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1995 => [[['_route' => 'general_get_database_configuration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2032 => [[['_route' => 'general_get_config_check', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2091 => [[['_route' => 'group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2133 => [[['_route' => 'group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2181 => [[['_route' => 'judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2223 => [[['_route' => 'judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2265 => [[['_route' => 'judgement_type_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2307 => [[['_route' => 'judgement_type_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2352 => [[['_route' => 'language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2394 => [[['_route' => 'language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2442 => [[['_route' => 'organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2484 => [[['_route' => 'organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2530 => [
            [['_route' => 'problems_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'problems_add_problem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null],
        ],
        2573 => [[['_route' => 'problems_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2612 => [[['_route' => 'run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2654 => [[['_route' => 'run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2699 => [[['_route' => 'scoreboard_get_scoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2743 => [[['_route' => 'submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2785 => [[['_route' => 'submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2816 => [[['_route' => 'submission_add_submission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null]],
        2865 => [[['_route' => 'submission_get_submission_filessubmission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2908 => [[['_route' => 'submission_get_submission_source_code', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2950 => [[['_route' => 'team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2992 => [[['_route' => 'team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3039 => [[['_route' => 'judgehost_create_judgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3084 => [[['_route' => 'judgehost_update_judge_host', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname', '_format'], ['PUT' => 0], null, false, true, null]],
        3145 => [[['_route' => 'judgehost_update_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['PUT' => 0], null, false, true, null]],
        3208 => [[['_route' => 'judgehost_add_judging_run', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['POST' => 0], null, false, true, null]],
        3254 => [[['_route' => 'judgehost_internal_error', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3286 => [[['_route' => 'judgehost_get_judgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3342 => [[['_route' => 'judgehost_get_next_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction', '_format' => 'json'], ['hostname', '_format'], ['POST' => 0], null, false, true, null]],
        3413 => [[['_route' => 'testcase_get_next_to_judge', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3468 => [[['_route' => 'testcase_get_file', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction', '_format' => 'json'], ['id', 'type', '_format'], ['GET' => 0], null, false, true, null]],
        3517 => [[['_route' => 'analysis_team', '_controller' => 'App\\Controller\\Jury\\AnalysisController::teamAction'], ['teamid'], null, null, false, true, null]],
        3542 => [[['_route' => 'analysis_problem', '_controller' => 'App\\Controller\\Jury\\AnalysisController::problemAction'], ['probid'], null, null, false, true, null]],
        3564 => [[['_route' => 'jury_ajax_data', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::ajaxDataAction'], ['datatype'], ['GET' => 0], null, false, true, null]],
        3593 => [[['_route' => 'jury_team_affiliation', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::viewAction'], ['affilId'], null, null, false, true, null]],
        3612 => [[['_route' => 'jury_team_affiliation_edit', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::editAction'], ['affilId'], null, null, false, false, null]],
        3633 => [[['_route' => 'jury_team_affiliation_delete', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::deleteAction'], ['affilId'], null, null, false, false, null]],
        3666 => [[['_route' => 'jury_balloons_setdone', '_controller' => 'App\\Controller\\Jury\\BalloonController::setDoneAction'], ['balloonId'], null, null, false, false, null]],
        3701 => [[['_route' => 'jury_clarification', '_controller' => 'App\\Controller\\Jury\\ClarificationController::viewAction'], ['id'], null, null, false, true, null]],
        3721 => [[['_route' => 'jury_clarification_claim', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleClaimAction'], ['clarId'], null, null, false, false, null]],
        3749 => [[['_route' => 'jury_clarification_set_answered', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleAnsweredAction'], ['clarId'], null, null, false, false, null]],
        3779 => [[['_route' => 'jury_clarification_change_subject', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeSubjectAction'], ['clarId'], null, null, false, false, null]],
        3807 => [[['_route' => 'jury_clarification_change_queue', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeQueueAction'], ['clarId'], null, null, false, false, null]],
        3833 => [[['_route' => 'jury_contest', '_controller' => 'App\\Controller\\Jury\\ContestController::viewAction'], ['contestId'], null, null, false, true, null]],
        3873 => [[['_route' => 'jury_contest_remove_interval', '_controller' => 'App\\Controller\\Jury\\ContestController::removeIntervalAction'], ['contestId', 'intervalId'], ['POST' => 0], null, false, true, null]],
        3892 => [[['_route' => 'jury_contest_edit', '_controller' => 'App\\Controller\\Jury\\ContestController::editAction'], ['contestId'], null, null, false, false, null]],
        3913 => [[['_route' => 'jury_contest_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteAction'], ['contestId'], null, null, false, false, null]],
        3949 => [[['_route' => 'jury_contest_problem_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        3972 => [[['_route' => 'jury_contest_finalize', '_controller' => 'App\\Controller\\Jury\\ContestController::finalizeAction'], ['contestId'], null, null, false, false, null]],
        4004 => [[['_route' => 'jury_change_contest', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        4031 => [[['_route' => 'jury_team_category', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::viewAction'], ['categoryId'], null, null, false, true, null]],
        4050 => [[['_route' => 'jury_team_category_edit', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::editAction'], ['categoryId'], null, null, false, false, null]],
        4071 => [[['_route' => 'jury_team_category_delete', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::deleteAction'], ['categoryId'], null, null, false, false, null]],
        4105 => [[['_route' => 'jury_executable', '_controller' => 'App\\Controller\\Jury\\ExecutableController::viewAction'], ['execId'], null, null, false, true, null]],
        4125 => [[['_route' => 'jury_executable_content', '_controller' => 'App\\Controller\\Jury\\ExecutableController::contentAction'], ['execId'], null, null, false, false, null]],
        4148 => [[['_route' => 'jury_executable_download', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadAction'], ['execId'], null, null, false, false, null]],
        4166 => [[['_route' => 'jury_executable_download_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadSingleAction'], ['execId', 'index'], null, null, false, true, null]],
        4181 => [[['_route' => 'jury_executable_delete', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteAction'], ['execId'], null, null, false, false, null]],
        4198 => [[['_route' => 'jury_executable_edit', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editAction'], ['execId'], null, null, false, false, null]],
        4214 => [[['_route' => 'jury_executable_edit_files', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editFilesAction'], ['execId'], null, null, false, false, null]],
        4292 => [[['_route' => 'jury_tsv_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportTsvAction'], ['type'], null, null, false, false, null]],
        4344 => [[['_route' => 'jury_html_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportHtmlAction'], ['type'], null, null, false, false, null]],
        4378 => [[['_route' => 'jury_internal_error', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::viewAction'], ['errorId'], ['GET' => 0], null, false, true, null]],
        4409 => [[['_route' => 'jury_internal_error_handle', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::handleAction'], ['errorId', 'action'], ['POST' => 0], null, false, true, null]],
        4448 => [[['_route' => 'jury_judgehost', '_controller' => 'App\\Controller\\Jury\\JudgehostController::viewAction'], ['hostname'], ['GET' => 0], null, false, true, null]],
        4470 => [[['_route' => 'jury_judgehost_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deleteAction'], ['hostname'], null, null, false, false, null]],
        4487 => [[['_route' => 'jury_judgehost_deactivate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAction'], ['hostname'], null, null, false, false, null]],
        4505 => [[['_route' => 'jury_judgehost_activate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAction'], ['hostname'], null, null, false, false, null]],
        4529 => [[['_route' => 'jury_judgehost_activate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4553 => [[['_route' => 'jury_judgehost_deactivate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4586 => [[['_route' => 'jury_judgehost_restriction', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::viewAction'], ['restrictionId'], null, null, false, true, null]],
        4605 => [[['_route' => 'jury_judgehost_restriction_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::editAction'], ['restrictionId'], null, null, false, false, null]],
        4626 => [[['_route' => 'jury_judgehost_restriction_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::deleteAction'], ['restrictionId'], null, null, false, false, null]],
        4658 => [[['_route' => 'jury_language', '_controller' => 'App\\Controller\\Jury\\LanguageController::viewAction'], ['langId'], null, null, false, true, null]],
        4688 => [[['_route' => 'jury_language_toggle_submit', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleSubmitAction'], ['langId'], null, null, false, false, null]],
        4702 => [[['_route' => 'jury_language_toggle_judge', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleJudgeAction'], ['langId'], null, null, false, false, null]],
        4716 => [[['_route' => 'jury_language_edit', '_controller' => 'App\\Controller\\Jury\\LanguageController::editAction'], ['langId'], null, null, false, false, null]],
        4731 => [[['_route' => 'jury_language_delete', '_controller' => 'App\\Controller\\Jury\\LanguageController::deleteAction'], ['langId'], null, null, false, false, null]],
        4766 => [[['_route' => 'jury_export_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::exportAction'], ['problemId'], null, null, false, false, null]],
        4780 => [[['_route' => 'jury_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewAction'], ['probId'], null, null, false, true, null]],
        4799 => [[['_route' => 'jury_problem_text', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewTextAction'], ['probId'], null, null, false, false, null]],
        4823 => [[['_route' => 'jury_problem_testcases', '_controller' => 'App\\Controller\\Jury\\ProblemController::testcasesAction'], ['probId'], null, null, false, false, null]],
        4868 => [[['_route' => 'jury_problem_testcase_move', '_controller' => 'App\\Controller\\Jury\\ProblemController::moveTestcaseAction'], ['probId', 'rank', 'direction'], null, null, false, true, null]],
        4925 => [[['_route' => 'jury_problem_testcase_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchTestcaseAction'], ['probId', 'rank', 'type'], null, null, false, true, null]],
        4944 => [[['_route' => 'jury_problem_edit', '_controller' => 'App\\Controller\\Jury\\ProblemController::editAction'], ['probId'], null, null, false, false, null]],
        4965 => [[['_route' => 'jury_problem_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAction'], ['probId'], null, null, false, false, null]],
        4994 => [[['_route' => 'jury_rejudging', '_controller' => 'App\\Controller\\Jury\\RejudgingController::viewAction'], ['rejudgingId'], null, null, false, true, null]],
        5023 => [[['_route' => 'jury_rejudging_finish', '_controller' => 'App\\Controller\\Jury\\RejudgingController::finishAction'], ['rejudgingId', 'action'], null, null, false, true, null]],
        5053 => [[['_route' => 'jury_submission', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        5089 => [[['_route' => 'jury_submission_by_judging', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction'], ['jid'], null, null, false, true, null]],
        5119 => [[['_route' => 'jury_submission_by_external_id', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalIdAction'], ['externalId'], null, null, false, true, null]],
        5176 => [[['_route' => 'jury_submission_team_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::teamOutputAction'], ['submission', 'contest', 'run'], null, null, false, false, null]],
        5191 => [[['_route' => 'jury_submission_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::sourceAction'], ['submission'], null, null, false, false, null]],
        5212 => [[['_route' => 'jury_submission_edit_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::editSourceAction'], ['submission'], null, null, false, false, null]],
        5242 => [[['_route' => 'jury_submission_update_status', '_controller' => 'App\\Controller\\Jury\\SubmissionController::updateStatusAction'], ['submitId'], ['POST' => 0], null, false, false, null]],
        5263 => [[['_route' => 'jury_judging_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyAction'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        5287 => [[['_route' => 'jury_team', '_controller' => 'App\\Controller\\Jury\\TeamController::viewAction'], ['teamId'], null, null, false, true, null]],
        5306 => [[['_route' => 'jury_team_edit', '_controller' => 'App\\Controller\\Jury\\TeamController::editAction'], ['teamId'], null, null, false, false, null]],
        5327 => [[['_route' => 'jury_team_delete', '_controller' => 'App\\Controller\\Jury\\TeamController::deleteAction'], ['teamId'], null, null, false, false, null]],
        5351 => [[['_route' => 'jury_user', '_controller' => 'App\\Controller\\Jury\\UserController::viewAction'], ['userId'], null, null, false, true, null]],
        5370 => [[['_route' => 'jury_user_edit', '_controller' => 'App\\Controller\\Jury\\UserController::editAction'], ['userId'], null, null, false, false, null]],
        5391 => [[['_route' => 'jury_user_delete', '_controller' => 'App\\Controller\\Jury\\UserController::deleteAction'], ['userId'], null, null, false, false, null]],
        5436 => [[['_route' => 'public_change_contest', '_controller' => 'App\\Controller\\PublicController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5455 => [[['_route' => 'public_team', '_controller' => 'App\\Controller\\PublicController::teamAction'], ['teamId'], null, null, false, true, null]],
        5483 => [[['_route' => 'public_problem_text', '_controller' => 'App\\Controller\\PublicController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5525 => [[['_route' => 'public_problem_sample_testcase', '_controller' => 'App\\Controller\\PublicController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5552 => [[['_route' => 'public_problem_sample_zip', '_controller' => 'App\\Controller\\PublicController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5594 => [[['_route' => 'team_clarification', '_controller' => 'App\\Controller\\Team\\ClarificationController::viewAction'], ['clarId'], null, null, false, true, null]],
        5625 => [[['_route' => 'team_change_contest', '_controller' => 'App\\Controller\\Team\\MiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5654 => [[['_route' => 'team_problem_text', '_controller' => 'App\\Controller\\Team\\ProblemController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5696 => [[['_route' => 'team_problem_sample_testcase', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5723 => [[['_route' => 'team_problem_sample_zip', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5750 => [[['_route' => 'problemlist', '_controller' => 'App\\Controller\\Team\\ProblemController::problemlistAction'], ['probId'], null, null, false, true, null]],
        5769 => [[['_route' => 'team_team', '_controller' => 'App\\Controller\\Team\\ScoreboardController::teamAction'], ['teamId'], null, null, false, true, null]],
        5794 => [
            [['_route' => 'team_submission', '_controller' => 'App\\Controller\\Team\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
