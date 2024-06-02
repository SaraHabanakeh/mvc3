<?php

namespace ContainerQ9CgAcj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_FailedMessageProcessingMiddlewareService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.middleware.failed_message_processing_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/FailedMessageProcessingMiddleware.php';

        return $container->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware();
    }
}
