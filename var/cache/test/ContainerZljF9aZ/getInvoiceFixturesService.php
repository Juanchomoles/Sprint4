<?php

namespace ContainerZljF9aZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInvoiceFixturesService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\DataFixtures\InvoiceFixtures' shared autowired service.
     *
     * @return \App\DataFixtures\InvoiceFixtures
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/DependentFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/InvoiceFixtures.php';

        return $container->privates['App\\DataFixtures\\InvoiceFixtures'] = new \App\DataFixtures\InvoiceFixtures(($container->privates['App\\Repository\\PrivateCustomerRepository'] ?? $container->load('getPrivateCustomerRepositoryService')), ($container->privates['App\\Repository\\OrderRepository'] ?? $container->load('getOrderRepositoryService')));
    }
}
