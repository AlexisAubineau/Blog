<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.audit.manager' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Model/AuditManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Model/AuditManager.php';

return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
