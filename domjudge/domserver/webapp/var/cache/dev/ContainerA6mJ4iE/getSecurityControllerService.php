<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\SecurityController' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/SecurityController.php';

$this->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()));

$instance->setContainer(($this->privates['.service_locator.rRajHyH'] ?? $this->load('get_ServiceLocator_RRajHyHService.php'))->withContext('App\\Controller\\SecurityController', $this));

return $instance;
