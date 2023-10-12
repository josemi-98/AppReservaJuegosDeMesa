<?php

namespace ContainerCEVyUMV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackageImagenlogoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'assets._package_imagenlogo' shared service.
     *
     * @return \Symfony\Component\Asset\PathPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['assets._package_imagenlogo'] = new \Symfony\Component\Asset\PathPackage('images', ($container->privates['assets.empty_version_strategy'] ??= new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy()), ($container->privates['assets.context'] ?? $container->getAssets_ContextService()));
    }
}
