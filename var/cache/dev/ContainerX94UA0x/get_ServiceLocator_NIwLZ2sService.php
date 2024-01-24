<?php

namespace ContainerX94UA0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NIwLZ2sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nIwLZ2s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nIwLZ2s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'vehicle' => ['privates', '.errored..service_locator.nIwLZ2s.App\\Entity\\Vehicle', NULL, 'Cannot autowire service ".service_locator.nIwLZ2s": it needs an instance of "App\\Entity\\Vehicle" but this type has been excluded in "config/services.yaml".'],
        ], [
            'vehicle' => 'App\\Entity\\Vehicle',
        ]);
    }
}
