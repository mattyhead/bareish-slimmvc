<?php

// Get Env variable to automatically include environment config
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// show errors when working on local
if (APPLICATION_ENV === 'local') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../configs/'.strtolower(APPLICATION_ENV).'.config.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,]
    ]);

// Automatically load router files
$routers = glob(__DIR__ . '/../routers/*.router.php');

foreach ($routers as $router) {
    require $router;
}

$app->run();

