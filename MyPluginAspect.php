<?php 
use Go\Core\AspectContainer;
use Go\Core\AspectKernel;
use Go\Core\AspectLoader;

class MyPluginAspect extends AspectKernel
{
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new MyPluginAspect());
    }

    /**
     * @Before("execution(public Staff->__onload(*))")
     */
    public function beforeStaffOnload(\Go\Aop\Intercept\MethodInvocation $invocation)
    {
        global $ost;
        $ost->addExtraHeader('<meta name="xxxx" content="some" />');
    }
}