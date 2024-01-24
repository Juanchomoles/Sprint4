<?php

namespace ContainerZljF9aZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_MetaData_ReaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.meta_data.reader' shared service.
     *
     * @return \Imagine\Image\Metadata\DefaultMetadataReader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/MetadataReaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/AbstractMetadataReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/DefaultMetadataReader.php';

        return $container->privates['liip_imagine.meta_data.reader'] = new \Imagine\Image\Metadata\DefaultMetadataReader();
    }
}
