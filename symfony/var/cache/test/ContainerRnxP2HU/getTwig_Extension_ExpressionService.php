<?php

namespace ContainerRnxP2HU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Extension_ExpressionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.extension.expression' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ExpressionExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';

        return $container->privates['twig.extension.expression'] = new \Symfony\Bridge\Twig\Extension\ExpressionExtension();
    }
}
