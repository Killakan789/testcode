<?php

namespace Container7ptpbC5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_BuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validation.php';

        $container->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(($container->privates['validator.validator_factory'] ?? $container->load('getValidator_ValidatorFactoryService')));
        $instance->setTranslationDomain('validators');
        $instance->enableAnnotationMapping(true);
        $instance->setDoctrineAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => ($container->privates['doctrine.orm.validator_initializer'] ?? $container->load('getDoctrine_Orm_ValidatorInitializerService'))]);
        $instance->addLoader(($container->privates['validator.property_info_loader'] ?? $container->load('getValidator_PropertyInfoLoaderService')));
        $instance->addLoader(($container->privates['doctrine.orm.default_entity_manager.validator_loader'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_ValidatorLoaderService')));

        return $instance;
    }
}
