<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.debug_autowiring' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php';

$this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

$instance->setName('debug:autowiring');

return $instance;
