<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\API\\AwardsController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ClarificationController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ContestController::getEventFeedAction' => ['privates', '.service_locator.d2NXzKf', 'get_ServiceLocator_D2NXzKfService.php', true],
    'App\\Controller\\API\\ContestController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ExecutableController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\GeneralInfoController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\GroupController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\JudgehostController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\JudgementController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\JudgementTypeController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\LanguageController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\OrganizationController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ProblemController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\RunController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ScoreboardController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\SubmissionController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\TeamController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\TestcaseController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\UserController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\Jury\\AnalysisController::problemAction' => ['privates', '.service_locator.k3pfvNh', 'get_ServiceLocator_K3pfvNhService.php', true],
    'App\\Controller\\Jury\\AnalysisController::teamAction' => ['privates', '.service_locator.gHpi1_c', 'get_ServiceLocator_GHpi1CService.php', true],
    'App\\Controller\\Jury\\AuditLogController::indexAction' => ['privates', '.service_locator.1sE9mY0', 'get_ServiceLocator_1sE9mY0Service.php', true],
    'App\\Controller\\Jury\\BalloonController::indexAction' => ['privates', '.service_locator.1sE9mY0', 'get_ServiceLocator_1sE9mY0Service.php', true],
    'App\\Controller\\Jury\\ConfigController::indexAction' => ['privates', '.service_locator.1fs_haV', 'get_ServiceLocator_1fsHaVService.php', true],
    'App\\Controller\\Jury\\ContestController::indexAction' => ['privates', '.service_locator.l9NCai0', 'get_ServiceLocator_L9NCai0Service.php', true],
    'App\\Controller\\Jury\\JudgehostController::activateAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\Jury\\JudgehostController::deactivateAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\Jury\\JuryMiscController::changeContestAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\Jury\\JuryMiscController::refreshCacheAction' => ['privates', '.service_locator.l_zN.Gu', 'get_ServiceLocator_LZN_GuService.php', true],
    'App\\Controller\\Jury\\LanguageController::indexAction' => ['privates', '.service_locator.Y8uCV8g', 'get_ServiceLocator_Y8uCV8gService.php', true],
    'App\\Controller\\Jury\\LanguageController::viewAction' => ['privates', '.service_locator.rEbIslC', 'get_ServiceLocator_REbIslCService.php', true],
    'App\\Controller\\Jury\\ProblemController::addTestcasesToZip' => ['privates', '.service_locator.SlKV0Gk', 'get_ServiceLocator_SlKV0GkService.php', true],
    'App\\Controller\\Jury\\ProblemController::viewAction' => ['privates', '.service_locator.rEbIslC', 'get_ServiceLocator_REbIslCService.php', true],
    'App\\Controller\\Jury\\RejudgingController::addAction' => ['privates', '.service_locator.fNFlVNO', 'get_ServiceLocator_FNFlVNOService.php', true],
    'App\\Controller\\Jury\\RejudgingController::createAction' => ['privates', '.service_locator.l_zN.Gu', 'get_ServiceLocator_LZN_GuService.php', true],
    'App\\Controller\\Jury\\RejudgingController::createRejudging' => ['privates', '.service_locator.l_zN.Gu', 'get_ServiceLocator_LZN_GuService.php', true],
    'App\\Controller\\Jury\\RejudgingController::finishAction' => ['privates', '.service_locator.ZR9itak', 'get_ServiceLocator_ZR9itakService.php', true],
    'App\\Controller\\Jury\\RejudgingController::viewAction' => ['privates', '.service_locator.rEbIslC', 'get_ServiceLocator_REbIslCService.php', true],
    'App\\Controller\\Jury\\SubmissionController::editSourceAction' => ['privates', '.service_locator.6_TwA0X', 'get_ServiceLocator_6TwA0XService.php', true],
    'App\\Controller\\Jury\\SubmissionController::sourceAction' => ['privates', '.service_locator.6_TwA0X', 'get_ServiceLocator_6TwA0XService.php', true],
    'App\\Controller\\Jury\\SubmissionController::teamOutputAction' => ['privates', '.service_locator.fBvfyQK', 'get_ServiceLocator_FBvfyQKService.php', true],
    'App\\Controller\\Jury\\SubmissionController::updateStatusAction' => ['privates', '.service_locator..OkkgLn', 'get_ServiceLocator__OkkgLnService.php', true],
    'App\\Controller\\Jury\\SubmissionController::verifyAction' => ['privates', '.service_locator.IbkTPLM', 'get_ServiceLocator_IbkTPLMService.php', true],
    'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction' => ['privates', '.service_locator.2xMcASS', 'get_ServiceLocator_2xMcASSService.php', true],
    'App\\Controller\\Jury\\TeamAffiliationController::indexAction' => ['privates', '.service_locator.c_zTQV3', 'get_ServiceLocator_CZTQV3Service.php', true],
    'App\\Controller\\Jury\\TeamAffiliationController::viewAction' => ['privates', '.service_locator.l_zN.Gu', 'get_ServiceLocator_LZN_GuService.php', true],
    'App\\Controller\\Jury\\TeamCategoryController::indexAction' => ['privates', '.service_locator.Y8uCV8g', 'get_ServiceLocator_Y8uCV8gService.php', true],
    'App\\Controller\\Jury\\TeamCategoryController::viewAction' => ['privates', '.service_locator.rEbIslC', 'get_ServiceLocator_REbIslCService.php', true],
    'App\\Controller\\Jury\\TeamController::indexAction' => ['privates', '.service_locator.Y8uCV8g', 'get_ServiceLocator_Y8uCV8gService.php', true],
    'App\\Controller\\Jury\\TeamController::viewAction' => ['privates', '.service_locator.PHzFzC9', 'get_ServiceLocator_PHzFzC9Service.php', true],
    'App\\Controller\\PublicController::changeContestAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\RootController::redirectAction' => ['privates', '.service_locator.uuEwnJ9', 'get_ServiceLocator_UuEwnJ9Service.php', true],
    'App\\Controller\\SecurityController::loginAction' => ['privates', '.service_locator.nps1yq4', 'get_ServiceLocator_Nps1yq4Service.php', true],
    'App\\Controller\\SecurityController::registerAction' => ['privates', '.service_locator.rQ5sdnG', 'get_ServiceLocator_RQ5sdnGService.php', true],
    'App\\Controller\\Team\\MiscController::changeContestAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\API\\AwardsController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ClarificationController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ContestController:getEventFeedAction' => ['privates', '.service_locator.d2NXzKf', 'get_ServiceLocator_D2NXzKfService.php', true],
    'App\\Controller\\API\\ContestController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ExecutableController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\GeneralInfoController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\GroupController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\JudgehostController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\JudgementController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\JudgementTypeController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\LanguageController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\OrganizationController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ProblemController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\RunController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\ScoreboardController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\SubmissionController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\TeamController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\TestcaseController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\API\\UserController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\Jury\\AnalysisController:problemAction' => ['privates', '.service_locator.k3pfvNh', 'get_ServiceLocator_K3pfvNhService.php', true],
    'App\\Controller\\Jury\\AnalysisController:teamAction' => ['privates', '.service_locator.gHpi1_c', 'get_ServiceLocator_GHpi1CService.php', true],
    'App\\Controller\\Jury\\AuditLogController:indexAction' => ['privates', '.service_locator.1sE9mY0', 'get_ServiceLocator_1sE9mY0Service.php', true],
    'App\\Controller\\Jury\\BalloonController:indexAction' => ['privates', '.service_locator.1sE9mY0', 'get_ServiceLocator_1sE9mY0Service.php', true],
    'App\\Controller\\Jury\\ConfigController:indexAction' => ['privates', '.service_locator.1fs_haV', 'get_ServiceLocator_1fsHaVService.php', true],
    'App\\Controller\\Jury\\ContestController:indexAction' => ['privates', '.service_locator.l9NCai0', 'get_ServiceLocator_L9NCai0Service.php', true],
    'App\\Controller\\Jury\\JudgehostController:activateAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\Jury\\JudgehostController:deactivateAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\Jury\\JuryMiscController:changeContestAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\Jury\\JuryMiscController:refreshCacheAction' => ['privates', '.service_locator.l_zN.Gu', 'get_ServiceLocator_LZN_GuService.php', true],
    'App\\Controller\\Jury\\LanguageController:indexAction' => ['privates', '.service_locator.Y8uCV8g', 'get_ServiceLocator_Y8uCV8gService.php', true],
    'App\\Controller\\Jury\\LanguageController:viewAction' => ['privates', '.service_locator.rEbIslC', 'get_ServiceLocator_REbIslCService.php', true],
    'App\\Controller\\Jury\\ProblemController:addTestcasesToZip' => ['privates', '.service_locator.SlKV0Gk', 'get_ServiceLocator_SlKV0GkService.php', true],
    'App\\Controller\\Jury\\ProblemController:viewAction' => ['privates', '.service_locator.rEbIslC', 'get_ServiceLocator_REbIslCService.php', true],
    'App\\Controller\\Jury\\RejudgingController:addAction' => ['privates', '.service_locator.fNFlVNO', 'get_ServiceLocator_FNFlVNOService.php', true],
    'App\\Controller\\Jury\\RejudgingController:createAction' => ['privates', '.service_locator.l_zN.Gu', 'get_ServiceLocator_LZN_GuService.php', true],
    'App\\Controller\\Jury\\RejudgingController:createRejudging' => ['privates', '.service_locator.l_zN.Gu', 'get_ServiceLocator_LZN_GuService.php', true],
    'App\\Controller\\Jury\\RejudgingController:finishAction' => ['privates', '.service_locator.ZR9itak', 'get_ServiceLocator_ZR9itakService.php', true],
    'App\\Controller\\Jury\\RejudgingController:viewAction' => ['privates', '.service_locator.rEbIslC', 'get_ServiceLocator_REbIslCService.php', true],
    'App\\Controller\\Jury\\SubmissionController:editSourceAction' => ['privates', '.service_locator.6_TwA0X', 'get_ServiceLocator_6TwA0XService.php', true],
    'App\\Controller\\Jury\\SubmissionController:sourceAction' => ['privates', '.service_locator.6_TwA0X', 'get_ServiceLocator_6TwA0XService.php', true],
    'App\\Controller\\Jury\\SubmissionController:teamOutputAction' => ['privates', '.service_locator.fBvfyQK', 'get_ServiceLocator_FBvfyQKService.php', true],
    'App\\Controller\\Jury\\SubmissionController:updateStatusAction' => ['privates', '.service_locator..OkkgLn', 'get_ServiceLocator__OkkgLnService.php', true],
    'App\\Controller\\Jury\\SubmissionController:verifyAction' => ['privates', '.service_locator.IbkTPLM', 'get_ServiceLocator_IbkTPLMService.php', true],
    'App\\Controller\\Jury\\SubmissionController:viewForJudgingAction' => ['privates', '.service_locator.2xMcASS', 'get_ServiceLocator_2xMcASSService.php', true],
    'App\\Controller\\Jury\\TeamAffiliationController:indexAction' => ['privates', '.service_locator.c_zTQV3', 'get_ServiceLocator_CZTQV3Service.php', true],
    'App\\Controller\\Jury\\TeamAffiliationController:viewAction' => ['privates', '.service_locator.l_zN.Gu', 'get_ServiceLocator_LZN_GuService.php', true],
    'App\\Controller\\Jury\\TeamCategoryController:indexAction' => ['privates', '.service_locator.Y8uCV8g', 'get_ServiceLocator_Y8uCV8gService.php', true],
    'App\\Controller\\Jury\\TeamCategoryController:viewAction' => ['privates', '.service_locator.rEbIslC', 'get_ServiceLocator_REbIslCService.php', true],
    'App\\Controller\\Jury\\TeamController:indexAction' => ['privates', '.service_locator.Y8uCV8g', 'get_ServiceLocator_Y8uCV8gService.php', true],
    'App\\Controller\\Jury\\TeamController:viewAction' => ['privates', '.service_locator.PHzFzC9', 'get_ServiceLocator_PHzFzC9Service.php', true],
    'App\\Controller\\PublicController:changeContestAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
    'App\\Controller\\RootController:redirectAction' => ['privates', '.service_locator.uuEwnJ9', 'get_ServiceLocator_UuEwnJ9Service.php', true],
    'App\\Controller\\SecurityController:loginAction' => ['privates', '.service_locator.nps1yq4', 'get_ServiceLocator_Nps1yq4Service.php', true],
    'App\\Controller\\SecurityController:registerAction' => ['privates', '.service_locator.rQ5sdnG', 'get_ServiceLocator_RQ5sdnGService.php', true],
    'App\\Controller\\Team\\MiscController:changeContestAction' => ['privates', '.service_locator.h4H53aV', 'get_ServiceLocator_H4H53aVService.php', true],
], [
    'App\\Controller\\API\\AwardsController::setViewHandler' => '?',
    'App\\Controller\\API\\ClarificationController::setViewHandler' => '?',
    'App\\Controller\\API\\ContestController::getEventFeedAction' => '?',
    'App\\Controller\\API\\ContestController::setViewHandler' => '?',
    'App\\Controller\\API\\ExecutableController::setViewHandler' => '?',
    'App\\Controller\\API\\GeneralInfoController::setViewHandler' => '?',
    'App\\Controller\\API\\GroupController::setViewHandler' => '?',
    'App\\Controller\\API\\JudgehostController::setViewHandler' => '?',
    'App\\Controller\\API\\JudgementController::setViewHandler' => '?',
    'App\\Controller\\API\\JudgementTypeController::setViewHandler' => '?',
    'App\\Controller\\API\\LanguageController::setViewHandler' => '?',
    'App\\Controller\\API\\OrganizationController::setViewHandler' => '?',
    'App\\Controller\\API\\ProblemController::setViewHandler' => '?',
    'App\\Controller\\API\\RunController::setViewHandler' => '?',
    'App\\Controller\\API\\ScoreboardController::setViewHandler' => '?',
    'App\\Controller\\API\\SubmissionController::setViewHandler' => '?',
    'App\\Controller\\API\\TeamController::setViewHandler' => '?',
    'App\\Controller\\API\\TestcaseController::setViewHandler' => '?',
    'App\\Controller\\API\\UserController::setViewHandler' => '?',
    'App\\Controller\\Jury\\AnalysisController::problemAction' => '?',
    'App\\Controller\\Jury\\AnalysisController::teamAction' => '?',
    'App\\Controller\\Jury\\AuditLogController::indexAction' => '?',
    'App\\Controller\\Jury\\BalloonController::indexAction' => '?',
    'App\\Controller\\Jury\\ConfigController::indexAction' => '?',
    'App\\Controller\\Jury\\ContestController::indexAction' => '?',
    'App\\Controller\\Jury\\JudgehostController::activateAction' => '?',
    'App\\Controller\\Jury\\JudgehostController::deactivateAction' => '?',
    'App\\Controller\\Jury\\JuryMiscController::changeContestAction' => '?',
    'App\\Controller\\Jury\\JuryMiscController::refreshCacheAction' => '?',
    'App\\Controller\\Jury\\LanguageController::indexAction' => '?',
    'App\\Controller\\Jury\\LanguageController::viewAction' => '?',
    'App\\Controller\\Jury\\ProblemController::addTestcasesToZip' => '?',
    'App\\Controller\\Jury\\ProblemController::viewAction' => '?',
    'App\\Controller\\Jury\\RejudgingController::addAction' => '?',
    'App\\Controller\\Jury\\RejudgingController::createAction' => '?',
    'App\\Controller\\Jury\\RejudgingController::createRejudging' => '?',
    'App\\Controller\\Jury\\RejudgingController::finishAction' => '?',
    'App\\Controller\\Jury\\RejudgingController::viewAction' => '?',
    'App\\Controller\\Jury\\SubmissionController::editSourceAction' => '?',
    'App\\Controller\\Jury\\SubmissionController::sourceAction' => '?',
    'App\\Controller\\Jury\\SubmissionController::teamOutputAction' => '?',
    'App\\Controller\\Jury\\SubmissionController::updateStatusAction' => '?',
    'App\\Controller\\Jury\\SubmissionController::verifyAction' => '?',
    'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction' => '?',
    'App\\Controller\\Jury\\TeamAffiliationController::indexAction' => '?',
    'App\\Controller\\Jury\\TeamAffiliationController::viewAction' => '?',
    'App\\Controller\\Jury\\TeamCategoryController::indexAction' => '?',
    'App\\Controller\\Jury\\TeamCategoryController::viewAction' => '?',
    'App\\Controller\\Jury\\TeamController::indexAction' => '?',
    'App\\Controller\\Jury\\TeamController::viewAction' => '?',
    'App\\Controller\\PublicController::changeContestAction' => '?',
    'App\\Controller\\RootController::redirectAction' => '?',
    'App\\Controller\\SecurityController::loginAction' => '?',
    'App\\Controller\\SecurityController::registerAction' => '?',
    'App\\Controller\\Team\\MiscController::changeContestAction' => '?',
    'App\\Controller\\API\\AwardsController:setViewHandler' => '?',
    'App\\Controller\\API\\ClarificationController:setViewHandler' => '?',
    'App\\Controller\\API\\ContestController:getEventFeedAction' => '?',
    'App\\Controller\\API\\ContestController:setViewHandler' => '?',
    'App\\Controller\\API\\ExecutableController:setViewHandler' => '?',
    'App\\Controller\\API\\GeneralInfoController:setViewHandler' => '?',
    'App\\Controller\\API\\GroupController:setViewHandler' => '?',
    'App\\Controller\\API\\JudgehostController:setViewHandler' => '?',
    'App\\Controller\\API\\JudgementController:setViewHandler' => '?',
    'App\\Controller\\API\\JudgementTypeController:setViewHandler' => '?',
    'App\\Controller\\API\\LanguageController:setViewHandler' => '?',
    'App\\Controller\\API\\OrganizationController:setViewHandler' => '?',
    'App\\Controller\\API\\ProblemController:setViewHandler' => '?',
    'App\\Controller\\API\\RunController:setViewHandler' => '?',
    'App\\Controller\\API\\ScoreboardController:setViewHandler' => '?',
    'App\\Controller\\API\\SubmissionController:setViewHandler' => '?',
    'App\\Controller\\API\\TeamController:setViewHandler' => '?',
    'App\\Controller\\API\\TestcaseController:setViewHandler' => '?',
    'App\\Controller\\API\\UserController:setViewHandler' => '?',
    'App\\Controller\\Jury\\AnalysisController:problemAction' => '?',
    'App\\Controller\\Jury\\AnalysisController:teamAction' => '?',
    'App\\Controller\\Jury\\AuditLogController:indexAction' => '?',
    'App\\Controller\\Jury\\BalloonController:indexAction' => '?',
    'App\\Controller\\Jury\\ConfigController:indexAction' => '?',
    'App\\Controller\\Jury\\ContestController:indexAction' => '?',
    'App\\Controller\\Jury\\JudgehostController:activateAction' => '?',
    'App\\Controller\\Jury\\JudgehostController:deactivateAction' => '?',
    'App\\Controller\\Jury\\JuryMiscController:changeContestAction' => '?',
    'App\\Controller\\Jury\\JuryMiscController:refreshCacheAction' => '?',
    'App\\Controller\\Jury\\LanguageController:indexAction' => '?',
    'App\\Controller\\Jury\\LanguageController:viewAction' => '?',
    'App\\Controller\\Jury\\ProblemController:addTestcasesToZip' => '?',
    'App\\Controller\\Jury\\ProblemController:viewAction' => '?',
    'App\\Controller\\Jury\\RejudgingController:addAction' => '?',
    'App\\Controller\\Jury\\RejudgingController:createAction' => '?',
    'App\\Controller\\Jury\\RejudgingController:createRejudging' => '?',
    'App\\Controller\\Jury\\RejudgingController:finishAction' => '?',
    'App\\Controller\\Jury\\RejudgingController:viewAction' => '?',
    'App\\Controller\\Jury\\SubmissionController:editSourceAction' => '?',
    'App\\Controller\\Jury\\SubmissionController:sourceAction' => '?',
    'App\\Controller\\Jury\\SubmissionController:teamOutputAction' => '?',
    'App\\Controller\\Jury\\SubmissionController:updateStatusAction' => '?',
    'App\\Controller\\Jury\\SubmissionController:verifyAction' => '?',
    'App\\Controller\\Jury\\SubmissionController:viewForJudgingAction' => '?',
    'App\\Controller\\Jury\\TeamAffiliationController:indexAction' => '?',
    'App\\Controller\\Jury\\TeamAffiliationController:viewAction' => '?',
    'App\\Controller\\Jury\\TeamCategoryController:indexAction' => '?',
    'App\\Controller\\Jury\\TeamCategoryController:viewAction' => '?',
    'App\\Controller\\Jury\\TeamController:indexAction' => '?',
    'App\\Controller\\Jury\\TeamController:viewAction' => '?',
    'App\\Controller\\PublicController:changeContestAction' => '?',
    'App\\Controller\\RootController:redirectAction' => '?',
    'App\\Controller\\SecurityController:loginAction' => '?',
    'App\\Controller\\SecurityController:registerAction' => '?',
    'App\\Controller\\Team\\MiscController:changeContestAction' => '?',
]));
