<?php

namespace Maar10\Simple\ServiceProvider;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
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
                fn () => DriverManager::getConnection(
                    [
                        'user' => 'user',
                        'driver' => 'pdo_mysql',
                    ]
                )
            )
        );
    }
}
