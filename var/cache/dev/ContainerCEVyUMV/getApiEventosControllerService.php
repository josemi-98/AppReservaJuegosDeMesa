<?php

namespace ContainerCEVyUMV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiEventosControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\ApiEventosController' shared autowired service.
     *
     * @return \App\Controller\Api\ApiEventosController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'ApiEventosController.php';

        $container->services['App\\Controller\\Api\\ApiEventosController'] = $instance = new \App\Controller\Api\ApiEventosController();

        $instance->setContainer(($container->privates['.service_locator.LFpjZXt'] ?? $container->load('get_ServiceLocator_LFpjZXtService'))->withContext('App\\Controller\\Api\\ApiEventosController', $container));

        return $instance;
    }
}
