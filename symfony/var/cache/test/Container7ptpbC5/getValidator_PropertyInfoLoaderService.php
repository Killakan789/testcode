<?php

namespace Container7ptpbC5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_PropertyInfoLoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'validator.property_info_loader' shared service.
     *
     * @return \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php';

        $a = ($container->privates['property_info'] ?? $container->load('getPropertyInfoService'));

        return $container->privates['validator.property_info_loader'] = new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL);
    }
}
