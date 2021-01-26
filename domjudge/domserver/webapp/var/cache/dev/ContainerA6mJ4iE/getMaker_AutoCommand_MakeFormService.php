<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_form' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/maker-bundle/src/MakerInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/maker-bundle/src/Maker/MakeForm.php';

$this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_helper'] ?? $this->load('getMaker_DoctrineHelperService.php')), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->load('getMaker_Renderer_FormTypeRendererService.php'))), ($this->privates['maker.file_manager'] ?? $this->load('getMaker_FileManagerService.php')), ($this->privates['maker.generator'] ?? $this->load('getMaker_GeneratorService.php')));

$instance->setName('make:form');

return $instance;
