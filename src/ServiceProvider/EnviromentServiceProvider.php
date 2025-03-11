<?php

namespace Maar10\Simple\ServiceProvider;

use Maar10\Simple\Environment;
use PrinsFrank\Container\Container;
use PrinsFrank\Container\Definition\DefinitionSet;
use PrinsFrank\Container\Definition\Item\Concrete;
use PrinsFrank\Container\Exception\InvalidArgumentException;
use PrinsFrank\Container\ServiceProvider\ServiceProviderInterface;

class EnviromentServiceProvider implements ServiceProviderInterface
{

    public function provides(string $identifier): bool
    {
        return $identifier === Environment::class;
    }

    /**
     * @throws InvalidArgumentException
     */
    public function register(string $identifier, DefinitionSet $resolvedSet, Container $container): void
    {
        $resolvedSet->add(
            new Concrete(
                $identifier,
                static function () {
                    $variables = [];
                    $envContents = file_get_contents(dirname(__DIR__, 2) . '/.env');
                    foreach (explode(PHP_EOL, $envContents) as $envLine) {
                        if (trim($envLine) === '') {
                            continue;
                        }

                        [$key, $value] = explode('=', $envLine, 2);
                        $variables[trim($key)] = trim($value);
                    }

                    return new Environment($variables);
            })
        );
    }
}
