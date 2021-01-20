<?php

namespace ContainerXXoUavx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CustomerController' shared autowired service.
     *
     * @return \App\Controller\CustomerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/CustomerController.php';

        return $container->services['App\\Controller\\CustomerController'] = new \App\Controller\CustomerController(($container->privates['App\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')), ($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));
    }
}
