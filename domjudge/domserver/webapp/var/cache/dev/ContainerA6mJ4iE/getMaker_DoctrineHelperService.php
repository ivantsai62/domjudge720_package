<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.doctrine_helper' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php';

return $this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', ($this->services['doctrine'] ?? $this->getDoctrineService()));
