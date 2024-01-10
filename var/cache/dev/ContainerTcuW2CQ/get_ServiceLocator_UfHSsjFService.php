<?php

namespace ContainerTcuW2CQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UfHSsjFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ufHSsjF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ufHSsjF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'InvoiceRep' => ['privates', 'App\\Repository\\InvoiceRepository', 'getInvoiceRepositoryService', true],
        ], [
            'InvoiceRep' => 'App\\Repository\\InvoiceRepository',
        ]);
    }
}