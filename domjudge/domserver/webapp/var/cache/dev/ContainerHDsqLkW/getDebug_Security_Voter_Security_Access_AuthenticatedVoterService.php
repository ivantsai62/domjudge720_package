<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.security.voter.security.access.authenticated_voter' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php';

return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL)))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
