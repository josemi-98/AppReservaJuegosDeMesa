<?php

namespace ContainerItYsVGi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiMesaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\ApiMesaController' shared autowired service.
     *
     * @return \App\Controller\Api\ApiMesaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'ApiMesaController.php';

        $container->services['App\\Controller\\Api\\ApiMesaController'] = $instance = new \App\Controller\Api\ApiMesaController();

        $instance->setContainer(($container->privates['.service_locator.LFpjZXt'] ?? $container->load('get_ServiceLocator_LFpjZXtService'))->withContext('App\\Controller\\Api\\ApiMesaController', $container));

        return $instance;
    }
}
