<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.xliff_lint' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Command/XliffLintCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/XliffLintCommand.php';

$this->services['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

$instance->setName('lint:xliff');

return $instance;