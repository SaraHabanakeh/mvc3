<?php

namespace ContainerMwMTxww;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ProviderFactory_NullService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.provider_factory.null' shared service.
     *
     * @return \Symfony\Component\Translation\Provider\NullProviderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Provider/ProviderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Provider/AbstractProviderFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Provider/NullProviderFactory.php';

        return $container->privates['translation.provider_factory.null'] = new \Symfony\Component\Translation\Provider\NullProviderFactory();
    }
}
