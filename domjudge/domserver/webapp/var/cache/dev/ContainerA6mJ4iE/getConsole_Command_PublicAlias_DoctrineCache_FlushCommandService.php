<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.doctrine_cache.flush_command' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/lib/vendor/doctrine/doctrine-cache-bundle/Command/CacheCommand.php';
include_once $this->targetDirs[4].'/lib/vendor/doctrine/doctrine-cache-bundle/Command/FlushCommand.php';

return $this->services['console.command.public_alias.doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();