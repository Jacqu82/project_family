<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'web_server.command.server_log' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle/Command/ServerLogCommand.php';

$this->services['web_server.command.server_log'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerLogCommand();

$instance->setName('server:log');

return $instance;