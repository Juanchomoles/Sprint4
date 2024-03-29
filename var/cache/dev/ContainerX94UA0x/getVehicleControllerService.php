<?php

namespace ContainerX94UA0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVehicleControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VehicleController' shared autowired service.
     *
     * @return \App\Controller\VehicleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/VehicleController.php';

        $container->services['App\\Controller\\VehicleController'] = $instance = new \App\Controller\VehicleController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\VehicleController', $container));

        return $instance;
    }
}
