<?php

namespace ContainerRVfkjj7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ExBHHSnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.exBHHSn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.exBHHSn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'brandRepository' => ['privates', 'App\\Repository\\BrandRepository', 'getBrandRepositoryService', true],
            'modelRepository' => ['privates', 'App\\Repository\\ModelRepository', 'getModelRepositoryService', true],
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'vehicleRepository' => ['privates', 'App\\Repository\\VehicleRepository', 'getVehicleRepositoryService', true],
        ], [
            'brandRepository' => 'App\\Repository\\BrandRepository',
            'modelRepository' => 'App\\Repository\\ModelRepository',
            'orderRepository' => 'App\\Repository\\OrderRepository',
            'vehicleRepository' => 'App\\Repository\\VehicleRepository',
        ]);
    }
}
