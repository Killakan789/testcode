<?php

namespace ContainerMOGxHkZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_Logger_Chain_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.dbal.logger.chain.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\LoggerChain
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';

        return $container->privates['doctrine.dbal.logger.chain.default'] = new \Doctrine\DBAL\Logging\LoggerChain([0 => ($container->privates['doctrine.dbal.logger'] ?? $container->load('getDoctrine_Dbal_LoggerService')), 1 => ($container->privates['doctrine.dbal.logger.profiling.default'] ?? ($container->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()))]);
    }
}
