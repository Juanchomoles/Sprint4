<?php

namespace ContainerZljF9aZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_Loader_BackgroundService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.filter.loader.background' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/BackgroundFilterLoader.php';

        return $container->privates['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader(($container->privates['liip_imagine.gd'] ?? $container->load('getLiipImagine_GdService')));
    }
}
