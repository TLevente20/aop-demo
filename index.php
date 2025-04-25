<?php

use Kernel\Kernel;

require_once __DIR__ . '/vendor/autoload.php';

$applicationRootPath = __DIR__;
$kernel = Kernel::getInstance();
$kernel->init([
    'debug' => true,
    'appDir' => $applicationRootPath . '/src',
    'cacheDir' => $applicationRootPath . '/cache',
    'includePaths' => [$applicationRootPath . '/src']
]);

require_once __DIR__ . '/src/web.php';