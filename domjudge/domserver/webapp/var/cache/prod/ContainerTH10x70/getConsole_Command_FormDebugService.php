<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form\\Type', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\Type\\AbstractExternalIdEntityType', 1 => 'App\\Form\\Type\\BaylorCmsType', 2 => 'App\\Form\\Type\\BootstrapFileType', 3 => 'App\\Form\\Type\\ContestExportType', 4 => 'App\\Form\\Type\\ContestImportType', 5 => 'App\\Form\\Type\\ContestProblemType', 6 => 'App\\Form\\Type\\ContestType', 7 => 'App\\Form\\Type\\ExecutableType', 8 => 'App\\Form\\Type\\ExecutableUploadType', 9 => 'App\\Form\\Type\\FinalizeContestType', 10 => 'App\\Form\\Type\\GeneratePasswordsType', 11 => 'App\\Form\\Type\\JudgehostRestrictionType', 12 => 'App\\Form\\Type\\JudgehostType', 13 => 'App\\Form\\Type\\JudgehostsType', 14 => 'App\\Form\\Type\\LanguageType', 15 => 'App\\Form\\Type\\MinimalUserType', 16 => 'App\\Form\\Type\\PrintType', 17 => 'App\\Form\\Type\\ProblemType', 18 => 'App\\Form\\Type\\ProblemUploadMultipleType', 19 => 'App\\Form\\Type\\ProblemUploadType', 20 => 'App\\Form\\Type\\RejudgingType', 21 => 'App\\Form\\Type\\RemovedIntervalType', 22 => 'App\\Form\\Type\\SubmitProblemType', 23 => 'App\\Form\\Type\\TeamAffiliationType', 24 => 'App\\Form\\Type\\TeamCategoryType', 25 => 'App\\Form\\Type\\TeamClarificationType', 26 => 'App\\Form\\Type\\TeamType', 27 => 'App\\Form\\Type\\TsvImportType', 28 => 'App\\Form\\Type\\UserRegistrationType', 29 => 'App\\Form\\Type\\UserType', 30 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 31 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 32 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 33 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType'], [0 => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DocumentationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 2 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'FOS\\RestBundle\\Form\\Extension\\DisableCSRFExtension'], [0 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

$instance->setName('debug:form');

return $instance;
