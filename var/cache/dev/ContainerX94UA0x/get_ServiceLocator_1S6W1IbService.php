<?php

namespace ContainerX94UA0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1S6W1IbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1S6W1Ib' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1S6W1Ib'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'vehicle' => ['privates', '.errored..service_locator.1S6W1Ib.App\\Entity\\Vehicle', NULL, 'Cannot autowire service ".service_locator.1S6W1Ib": it needs an instance of "App\\Entity\\Vehicle" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'vehicle' => 'App\\Entity\\Vehicle',
        ]);
    }
}
