<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_distribution.security_checker.command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/sensiolabs/security-checker/SensioLabs/Security/Command/SecurityCheckerCommand.php';
include_once $this->targetDirs[3].'/vendor/sensiolabs/security-checker/SensioLabs/Security/SecurityChecker.php';

$this->services['sensio_distribution.security_checker.command'] = $instance = new \SensioLabs\Security\Command\SecurityCheckerCommand(${($_ = isset($this->services['sensio_distribution.security_checker']) ? $this->services['sensio_distribution.security_checker'] : $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker()) && false ?: '_'});

$instance->setName('security:check');

return $instance;