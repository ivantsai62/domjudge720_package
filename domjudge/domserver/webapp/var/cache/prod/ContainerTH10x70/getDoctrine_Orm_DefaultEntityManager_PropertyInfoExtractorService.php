<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/property-info/PropertyListExtractorInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/doctrine-bridge/PropertyInfo/DoctrineExtractor.php';

return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
