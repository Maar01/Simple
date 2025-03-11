<?php

namespace Maar10\Simple;

use Maar10\Simple\ServiceProvider\ConnectionServiceProvider;
use Maar10\Simple\ServiceProvider\EnviromentServiceProvider;
use PrinsFrank\Container\Container;
use PrinsFrank\Container\ServiceProvider\ServiceProviderInterface;

class Kernel
{
    private static Container $container;
    public static function getContainer(): Container
    {
        if (isset(self::$container)) {
            return self::$container;
        }

        self::$container = new Container();
        foreach (self::getServiceProviders() as $serviceProvider) {
            self::$container->addServiceProvider(new $serviceProvider());

        }

        return self::$container;
    }

    /**
     * @return array<class-string<ServiceProviderInterface>>
     */
    private static function getServiceProviders(): array
    {
        return [
            ConnectionServiceProvider::class,
            EnviromentServiceProvider::class,
        ];
    }
}
