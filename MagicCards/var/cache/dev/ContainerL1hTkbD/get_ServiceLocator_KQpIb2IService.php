<?php

namespace ContainerL1hTkbD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KQpIb2IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KQpIb2I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KQpIb2I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'carte' => ['privates', '.errored..service_locator.KQpIb2I.App\\Entity\\Carte', NULL, 'Cannot autowire service ".service_locator.KQpIb2I": it needs an instance of "App\\Entity\\Carte" but this type has been excluded in "config/services.yaml".'],
        ], [
            'carte' => 'App\\Entity\\Carte',
        ]);
    }
}
