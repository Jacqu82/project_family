<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.yaml_lint' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Yaml/Command/LintCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/YamlLintCommand.php';

$this->services['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

$instance->setName('lint:yaml');

return $instance;
