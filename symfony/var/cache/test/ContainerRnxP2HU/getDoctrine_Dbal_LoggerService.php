<?php

namespace ContainerRnxP2HU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_LoggerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.dbal.logger' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Logger\DbalLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';

        return $container->privates['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger(($container->privates['monolog.logger.doctrine'] ?? $container->load('getMonolog_Logger_DoctrineService')), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
