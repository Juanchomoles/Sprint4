<?php

namespace ContainerX94UA0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Clean_ProvidersDocumentsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'vich_uploader.listener.clean.providers_documents' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\CleanListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/BaseListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/CleanListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/ORM/DoctrineORMAdapter.php';

        $a = ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService'));

        if (isset($container->privates['vich_uploader.listener.clean.providers_documents'])) {
            return $container->privates['vich_uploader.listener.clean.providers_documents'];
        }

        return $container->privates['vich_uploader.listener.clean.providers_documents'] = new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('providers_documents', ($container->privates['vich_uploader.adapter.orm'] ??= new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter()), ($container->privates['vich_uploader.metadata_reader'] ?? self::getVichUploader_MetadataReaderService($container)), $a);
    }
}
