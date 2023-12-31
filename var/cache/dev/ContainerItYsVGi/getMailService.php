<?php

namespace ContainerItYsVGi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\mail' shared autowired service.
     *
     * @return \App\Service\mail
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'mail.php';

        $container->services['App\\Service\\mail'] = $instance = new \App\Service\mail(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['App\\Service\\Pdf'] ?? $container->load('getPdfService')));

        $instance->setContainer(($container->privates['.service_locator.LFpjZXt'] ?? $container->load('get_ServiceLocator_LFpjZXtService'))->withContext('App\\Service\\mail', $container));

        return $instance;
    }
}
