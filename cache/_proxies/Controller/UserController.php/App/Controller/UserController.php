<?php
namespace App\Controller;

use App\Service\UserService as UserService;
use App\Model\User as User;

class UserController extends UserController__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = [
        'method' => [
            'login' => [
                'advisor.Aspect\\MonitorAspect->beforeLogin'
            ]
        ]
    ];
    
    
    public function login()
    {
        return self::$__joinPoints['method:login']->__invoke($this);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints(UserController::class);