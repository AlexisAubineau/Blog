<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_update' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/TranslationUpdateCommand.php';

$this->services['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(${($_ = isset($this->services['translation.writer']) ? $this->services['translation.writer'] : $this->load(__DIR__.'/getTranslation_WriterService.php')) && false ?: '_'}, ${($_ = isset($this->services['translation.reader']) ? $this->services['translation.reader'] : $this->load(__DIR__.'/getTranslation_ReaderService.php')) && false ?: '_'}, ${($_ = isset($this->services['translation.extractor']) ? $this->services['translation.extractor'] : $this->load(__DIR__.'/getTranslation_ExtractorService.php')) && false ?: '_'}, 'fr', ($this->targetDirs[3].'/translations'), ($this->targetDirs[3].'/templates'));

$instance->setName('translation:update');

return $instance;
