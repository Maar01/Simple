<?php

namespace Maar10\Simple\ServiceProvider;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Maar10\Simple\Environment;
use Maar10\Simple\EnviromentKey;
use PrinsFrank\Container\Container;
use PrinsFrank\Container\Definition\DefinitionSet;
use PrinsFrank\Container\Definition\Item\Concrete;
use PrinsFrank\Container\ServiceProvider\ServiceProviderInterface;

class ConnectionServiceProvider implements ServiceProviderInterface
{

    public function provides(string $identifier): bool
    {
        return $identifier === Connection::class;
    }

    public function register(string $identifier, DefinitionSet $resolvedSet, Container $container): void
    {
        $resolvedSet->add(
            new Concrete(
                $identifier,
                fn (Environment $enviroment) => DriverManager::getConnection(
                    [
                        'user' => $enviroment->get(EnviromentKey::DATABASE_USER),
                        'host' => $enviroment->get(EnviromentKey::DATABASE_HOST),
                        'port' => $enviroment->get(EnviromentKey::DATABASE_PORT),
                        'dbname' => $enviroment->get(EnviromentKey::DATABASE_NAME),
                        'driver' => $enviroment->get(EnviromentKey::DATABASE_DRIVER),
                        'password' => $enviroment->get(EnviromentKey::DATABASE_PASSWORD),
                    ]
                )
            )
        );
    }
}
