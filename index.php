<?php
require_once __DIR__ . '/vendor/autoload.php';
require "aspect/Kernel.php";

// Initialize the AOP Kernel
$kernel = MyKernel::init();

require "src/web.php";