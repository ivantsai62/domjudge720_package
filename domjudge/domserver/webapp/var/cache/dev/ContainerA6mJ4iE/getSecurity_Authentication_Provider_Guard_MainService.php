<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.guard.main' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/security-guard/Provider/GuardAuthenticationProvider.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/security-core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/src/Security/UserChecker.php';

return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
    yield 0 => ($this->privates['App\\Security\\DOMJudgeXHeadersAuthenticator'] ?? $this->load('getDOMJudgeXHeadersAuthenticatorService.php'));
    yield 1 => ($this->privates['App\\Security\\DOMJudgeIPAuthenticator'] ?? $this->load('getDOMJudgeIPAuthenticatorService.php'));
}, 2), ($this->privates['security.user.provider.concrete.domjudge_db_provider'] ?? $this->load('getSecurity_User_Provider_Concrete_DomjudgeDbProviderService.php')), 'main', ($this->privates['App\\Security\\UserChecker'] ?? ($this->privates['App\\Security\\UserChecker'] = new \App\Security\UserChecker())));
