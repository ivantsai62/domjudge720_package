<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.h4H53aV' shared service.

return $this->privates['.service_locator.h4H53aV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'router' => ['services', 'router', 'getRouterService', false],
], [
    'router' => '?',
]);