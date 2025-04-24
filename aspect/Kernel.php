<?php
use Okapi\Aop\AopKernel;
require_once "aspect/UserAspect.php";


class MyKernel extends AopKernel
{
    
    protected array $aspects = [
        UserControllerAspect::class,
    ];   
}
$kernel = MyKernel::init();