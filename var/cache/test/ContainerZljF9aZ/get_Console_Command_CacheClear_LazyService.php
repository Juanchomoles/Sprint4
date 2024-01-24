<?php

namespace ContainerZljF9aZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_CacheClear_LazyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.console.command.cache_clear.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.cache_clear.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('cache:clear', [], 'Clear the cache', false, #[\Closure(name: 'console.command.cache_clear', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand => ($container->privates['console.command.cache_clear'] ?? $container->load('getConsole_Command_CacheClearService')));
    }
}
