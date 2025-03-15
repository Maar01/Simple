<?php

namespace Maar10\Simple\Tests\Unit;

use Maar10\Simple\EnviromentKey;
use Maar10\Simple\Environment;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Environment::class)]
class EnvironmentTest extends TestCase
{
    public function testGet()
    {
        $environment = new Environment([]);
        static::assertNull($environment->get(EnviromentKey::DATABASE_USER));

        $environment = new Environment([EnviromentKey::DATABASE_USER->value => 'simple_user']);
        static::assertSame('simple_user', $environment->get(EnviromentKey::DATABASE_USER));
    }
}
