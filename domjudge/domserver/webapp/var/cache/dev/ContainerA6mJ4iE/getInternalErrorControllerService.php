<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Jury\InternalErrorController' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/BaseController.php';
include_once $this->targetDirs[3].'/src/Controller/Jury/InternalErrorController.php';

$this->services['App\\Controller\\Jury\\InternalErrorController'] = $instance = new \App\Controller\Jury\InternalErrorController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()));

$instance->setContainer(($this->privates['.service_locator.rRajHyH'] ?? $this->load('get_ServiceLocator_RRajHyHService.php'))->withContext('App\\Controller\\Jury\\InternalErrorController', $this));

return $instance;