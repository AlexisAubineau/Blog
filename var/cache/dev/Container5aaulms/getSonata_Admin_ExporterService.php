<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.exporter' shared service.

@trigger_error('The "sonata.admin.exporter" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
