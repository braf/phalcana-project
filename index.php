<?php

error_reporting(E_ALL);
define('DOCROOT', realpath(__DIR__).DIRECTORY_SEPARATOR);
define('APPPATH', realpath(DOCROOT.'app').DIRECTORY_SEPARATOR);
define('MODPATH', realpath(DOCROOT.'modules').DIRECTORY_SEPARATOR);
define('SYSPATH', realpath(DOCROOT.'system').DIRECTORY_SEPARATOR);

// Include the core framework files
require_once SYSPATH.'classes/Phalcana.php';
require_once SYSPATH.'classes/Core/Filesystem.php';
require_once DOCROOT.'vendor/autoload.php';

// Initialize the framework
$app = new \Phalcana\Phalcana();

$app->main();
