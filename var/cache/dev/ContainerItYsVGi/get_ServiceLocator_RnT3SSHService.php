<?php

namespace ContainerItYsVGi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RnT3SSHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RnT3SSH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RnT3SSH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'juego' => ['privates', '.errored..service_locator.RnT3SSH.App\\Entity\\Juego', NULL, 'Cannot autowire service ".service_locator.RnT3SSH": it needs an instance of "App\\Entity\\Juego" but this type has been excluded in "config/services.yaml".'],
        ], [
            'juego' => 'App\\Entity\\Juego',
        ]);
    }
}
