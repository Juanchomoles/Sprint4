<?php

namespace ContainerZljF9aZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_ManagerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'liip_imagine.filter.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/FilterManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/RelativeResizeFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ResizeFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ThumbnailFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/CropFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/GrayscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/StripFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ScaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/UpscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/DownscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/AutoRotateFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/RotateFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FlipFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/InterlaceFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FixedFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/PostProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/AbstractPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/PngquantPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/MozJpegPostProcessor.php';

        $container->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(($container->privates['liip_imagine.filter.configuration'] ??= new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration([])), ($container->privates['liip_imagine.gd'] ?? $container->load('getLiipImagine_GdService')), ($container->privates['liip_imagine.binary.mime_type_guesser'] ?? $container->load('getLiipImagine_Binary_MimeTypeGuesserService')));

        $instance->addLoader('relative_resize', ($container->privates['liip_imagine.filter.loader.relative_resize'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader()));
        $instance->addLoader('resize', ($container->privates['liip_imagine.filter.loader.resize'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader()));
        $instance->addLoader('thumbnail', ($container->privates['liip_imagine.filter.loader.thumbnail'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader()));
        $instance->addLoader('crop', ($container->privates['liip_imagine.filter.loader.crop'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader()));
        $instance->addLoader('grayscale', ($container->services['liip_imagine.filter.loader.grayscale'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader()));
        $instance->addLoader('paste_image', ($container->privates['liip_imagine.filter.loader.paste_image'] ?? $container->load('getLiipImagine_Filter_Loader_PasteImageService')));
        $instance->addLoader('watermark_image', ($container->privates['liip_imagine.filter.loader.watermark_image'] ?? $container->load('getLiipImagine_Filter_Loader_WatermarkImageService')));
        $instance->addLoader('background', ($container->privates['liip_imagine.filter.loader.background'] ?? $container->load('getLiipImagine_Filter_Loader_BackgroundService')));
        $instance->addLoader('strip', ($container->privates['liip_imagine.filter.loader.strip'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader()));
        $instance->addLoader('scale', ($container->privates['liip_imagine.filter.loader.scale'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader()));
        $instance->addLoader('upscale', ($container->privates['liip_imagine.filter.loader.upscale'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader()));
        $instance->addLoader('downscale', ($container->services['liip_imagine.filter.loader.downscale'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader()));
        $instance->addLoader('auto_rotate', ($container->privates['liip_imagine.filter.loader.auto_rotate'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader()));
        $instance->addLoader('rotate', ($container->services['liip_imagine.filter.loader.rotate'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader()));
        $instance->addLoader('flip', ($container->services['liip_imagine.filter.loader.flip'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader()));
        $instance->addLoader('interlace', ($container->services['liip_imagine.filter.loader.interlace'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader()));
        $instance->addLoader('resample', ($container->services['liip_imagine.filter.loader.resample'] ?? $container->load('getLiipImagine_Filter_Loader_ResampleService')));
        $instance->addLoader('fixed', ($container->services['liip_imagine.filter.loader.fixed'] ??= new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader()));
        $instance->addPostProcessor('jpegoptim', ($container->privates['liip_imagine.filter.post_processor.jpegoptim'] ?? $container->load('getLiipImagine_Filter_PostProcessor_JpegoptimService')));
        $instance->addPostProcessor('optipng', ($container->privates['liip_imagine.filter.post_processor.optipng'] ?? $container->load('getLiipImagine_Filter_PostProcessor_OptipngService')));
        $instance->addPostProcessor('pngquant', ($container->privates['liip_imagine.filter.post_processor.pngquant'] ??= new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant')));
        $instance->addPostProcessor('mozjpeg', ($container->privates['liip_imagine.filter.post_processor.mozjpeg'] ??= new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg')));
        $instance->addPostProcessor('cwebp', ($container->privates['liip_imagine.filter.post_processor.cwebp'] ?? $container->load('getLiipImagine_Filter_PostProcessor_CwebpService')));

        return $instance;
    }
}
