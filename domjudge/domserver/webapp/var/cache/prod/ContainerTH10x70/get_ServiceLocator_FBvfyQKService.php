<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.fBvfyQK' shared service.

return $this->privates['.service_locator.fBvfyQK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'contest' => ['privates', '.errored..service_locator.fBvfyQK.App\\Entity\\Contest', NULL, 'Cannot autowire service ".service_locator.fBvfyQK": it references class "App\\Entity\\Contest" but no such service exists.'],
    'run' => ['privates', '.errored..service_locator.fBvfyQK.App\\Entity\\JudgingRun', NULL, 'Cannot autowire service ".service_locator.fBvfyQK": it references class "App\\Entity\\JudgingRun" but no such service exists.'],
    'submission' => ['privates', '.errored..service_locator.fBvfyQK.App\\Entity\\Submission', NULL, 'Cannot autowire service ".service_locator.fBvfyQK": it references class "App\\Entity\\Submission" but no such service exists.'],
], [
    'contest' => 'App\\Entity\\Contest',
    'run' => 'App\\Entity\\JudgingRun',
    'submission' => 'App\\Entity\\Submission',
]);
