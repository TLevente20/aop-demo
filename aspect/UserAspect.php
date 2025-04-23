<?php
require "src/Controller/UserController.php";

use InvalidArgumentException;
use Okapi\Aop\Attributes\After;
use Okapi\Aop\Attributes\Around;
use Okapi\Aop\Attributes\Aspect;
use Okapi\Aop\Attributes\Before;
use Okapi\Aop\Invocation\AroundMethodInvocation;
use Okapi\Aop\Invocation\AfterMethodInvocation;
use Okapi\Aop\Invocation\BeforeMethodInvocation;

#[Aspect]
class UserControllerAspect
{
    #[Before(
        class: UserController::class,
        method: 'login',
    )]
    public function echoLogin(BeforeMethodInvocation $invocation): void
    {
       var_dump("csa this is login");
    }
}