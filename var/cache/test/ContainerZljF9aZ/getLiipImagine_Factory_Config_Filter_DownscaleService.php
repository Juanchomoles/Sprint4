<?php

namespace ContainerZljF9aZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Factory_Config_Filter_DownscaleService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.factory.config.filter.downscale' shared service.
     *
     * @return \Liip\ImagineBundle\Factory\Config\Filter\DownscaleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/FilterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/DownscaleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/Argument/SizeFactory.php';

        return $container->privates['liip_imagine.factory.config.filter.downscale'] = new \Liip\ImagineBundle\Factory\Config\Filter\DownscaleFactory(($container->privates['liip_imagine.factory.config.filter.argument.size'] ??= new \Liip\ImagineBundle\Factory\Config\Filter\Argument\SizeFactory()));
    }
}
