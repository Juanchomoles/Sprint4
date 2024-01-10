<?php

namespace ContainerTcuW2CQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IK13U2pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iK13U2p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iK13U2p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'provider' => ['privates', '.errored..service_locator.iK13U2p.App\\Entity\\Provider', NULL, 'Cannot autowire service ".service_locator.iK13U2p": it needs an instance of "App\\Entity\\Provider" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'provider' => 'App\\Entity\\Provider',
        ]);
    }
}
