<?php

namespace ContainerRVfkjj7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Binary_MimeTypeGuesserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.binary.mime_type_guesser' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/SimpleMimeTypeGuesser.php';

        return $container->privates['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser(\Symfony\Component\Mime\MimeTypes::getDefault());
    }
}
