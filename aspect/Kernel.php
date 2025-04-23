<?php

use Okapi\Aop\AopKernel;
require 'UserAspect.php';

// Extend from the "AopKernel" class
class MyKernel extends AopKernel
{
    // Define a list of aspects
    protected array $aspects = [
        UserControllerAspect::class,
    ];   
}