<?php

namespace ContainerX94UA0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_FixturesLoadCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Command/CommandCompatibility.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyBridgeLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/AppFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/CustomerFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/EmployeeFixtures.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/DependentFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/ImageFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/InvoiceFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/OrderFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/ProviderFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/VehicleFixtures.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/ORMPurgerFactory.php';

        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($container);

        $b = ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService'));
        $c = ($container->privates['App\\Repository\\PrivateCustomerRepository'] ?? $container->load('getPrivateCustomerRepositoryService'));

        $a->addFixtures([['fixture' => new \App\DataFixtures\AppFixtures(), 'groups' => []], ['fixture' => new \App\DataFixtures\CustomerFixtures($b), 'groups' => []], ['fixture' => new \App\DataFixtures\EmployeeFixtures($b), 'groups' => []], ['fixture' => new \App\DataFixtures\ImageFixtures(), 'groups' => []], ['fixture' => new \App\DataFixtures\InvoiceFixtures($c, ($container->privates['App\\Repository\\OrderRepository'] ?? $container->load('getOrderRepositoryService'))), 'groups' => []], ['fixture' => new \App\DataFixtures\OrderFixtures($c, ($container->privates['App\\Repository\\VehicleRepository'] ?? $container->load('getVehicleRepositoryService'))), 'groups' => []], ['fixture' => new \App\DataFixtures\ProviderFixtures(), 'groups' => []], ['fixture' => new \App\DataFixtures\VehicleFixtures(($container->privates['App\\Repository\\ProviderRepository'] ?? $container->load('getProviderRepositoryService'))), 'groups' => []]]);

        $container->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($container->services['doctrine'] ?? self::getDoctrineService($container)), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }
}
