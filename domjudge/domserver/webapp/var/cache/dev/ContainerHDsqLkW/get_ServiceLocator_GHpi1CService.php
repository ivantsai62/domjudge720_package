<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.gHpi1_c' shared service.

return $this->privates['.service_locator.gHpi1_c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'team' => ['privates', '.errored..service_locator.gHpi1_c.App\\Entity\\Team', NULL, 'Cannot autowire service ".service_locator.gHpi1_c": it references class "App\\Entity\\Team" but no such service exists.'],
], [
    'team' => 'App\\Entity\\Team',
]);