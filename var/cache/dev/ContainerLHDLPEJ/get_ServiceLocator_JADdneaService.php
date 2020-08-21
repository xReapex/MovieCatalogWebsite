<?php

namespace ContainerLHDLPEJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JADdneaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JADdnea' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JADdnea'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', 'App\\Repository\\AdminRepository', 'getAdminRepositoryService', true],
        ], [
            'user' => 'App\\Repository\\AdminRepository',
        ]);
    }
}
