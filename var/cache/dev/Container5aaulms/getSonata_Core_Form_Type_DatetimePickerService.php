<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.core.form.type.datetime_picker' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/Form/Type/BasePickerType.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/Form/Type/DateTimePickerType.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/Date/MomentFormatConverter.php';

return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType(${($_ = isset($this->services['sonata.core.date.moment_format_converter']) ? $this->services['sonata.core.date.moment_format_converter'] : $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter()) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
