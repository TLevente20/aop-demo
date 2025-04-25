<?php

namespace Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

class MonitorAspect implements Aspect
{
    /**
     * @param MethodInvocation $invocation Invocation
     * @Before("execution(public App\Controller\UserController->login(*))")
     */
    public function beforeLogin(MethodInvocation $invocation)
    {
        echo "AOP says hi before login!<br>";
    }
}
