<?php

namespace ContainerMOGxHkZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Mapping_CacheClassMetadataFactory_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.mapping.cache_class_metadata_factory.inner' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';

        return $container->privates['serializer.mapping.cache_class_metadata_factory.inner'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(($container->privates['serializer.mapping.chain_loader'] ?? $container->load('getSerializer_Mapping_ChainLoaderService')));
    }
}
