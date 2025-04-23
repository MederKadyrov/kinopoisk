<?php

require_once __DIR__ . '/../vendor/autoload.php';

define("APP_PATH", dirname(__DIR__));
use App\Kernel\App;

$app = new App();

$app->run();

