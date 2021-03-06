<?php

use Nexus\CustomCommand\CustomCommandConfig;
use Nexus\Dumper\DumperConfig;
use Xervice\Core\CoreConfig;
use Xervice\DataProvider\DataProviderConfig;
use Xervice\Development\DevelopmentConfig;

$config[CoreConfig::PROJECT_NAMESPACES] = [
    'Nexus',
    'Project'
];

$config[DataProviderConfig::DATA_PROVIDER_GENERATED_PATH] = dirname(__DIR__) . '/_Generated';
$config[DataProviderConfig::DATA_PROVIDER_PATHS] = [
    dirname(__DIR__) . '/src/Nexus/*/Schema/'
];

$config[DevelopmentConfig::GENERATED_PATH] = dirname(__DIR__) . '/_Generated/Ide';

$config[DumperConfig::SSH_HOST] = '5.9.82.139';
$config[DumperConfig::SSH_USER] = 'nxsdocker';
$config[DumperConfig::PROJECT_NAME] = 'myproject';
$config[DumperConfig::IMAGE_NAME] = 'nxs-docker-dumper';
$config[DumperConfig::DUMP_DIRECTORY] = dirname(__DIR__) . '/dump';

$config[CustomCommandConfig::COMMAND_PATH] = dirname(__DIR__) . '/nxscli/commands';