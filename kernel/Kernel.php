<?php

namespace Kernel;

use Go\Core\AspectKernel;
use Go\Core\AspectContainer;
use Aspect\MonitorAspect;

class Kernel extends AspectKernel
{
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new MonitorAspect());
    }
}
