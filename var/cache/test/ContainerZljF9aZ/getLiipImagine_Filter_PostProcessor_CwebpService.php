<?php

namespace ContainerZljF9aZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_PostProcessor_CwebpService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.filter.post_processor.cwebp' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\CwebpPostProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/PostProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/AbstractPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/CwebpPostProcessor.php';

        return $container->privates['liip_imagine.filter.post_processor.cwebp'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\CwebpPostProcessor('/usr/bin/cwebp', NULL, 75, 100, 4, 'fast', 1, false, $container->parameters['liip_imagine.cwebp.metadata']);
    }
}
