<?php

namespace ContainerXEcfVf8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Listener_ResetServicesService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.listener.reset_services' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\ResetServicesListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/ResetServicesListener.php';

        return $container->privates['messenger.listener.reset_services'] = new \Symfony\Component\Messenger\EventListener\ResetServicesListener(($container->services['services_resetter'] ?? $container->load('getServicesResetterService')));
    }
}
