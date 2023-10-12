<?php

namespace ContainerCEVyUMV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateUserCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\CreateUserCommand' shared autowired service.
     *
     * @return \App\Command\CreateUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CreateUserCommand.php';

        $container->privates['App\\Command\\CreateUserCommand'] = $instance = new \App\Command\CreateUserCommand();

        $instance->setName('app:create-user');

        return $instance;
    }
}
