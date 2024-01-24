<?php

namespace ContainerX94UA0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDniValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Validator\DniValidator' shared autowired service.
     *
     * @return \App\Validator\DniValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Validator/DniValidator.php';

        return $container->privates['App\\Validator\\DniValidator'] = new \App\Validator\DniValidator();
    }
}