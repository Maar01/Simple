<?php

namespace Maar10\Simple;

class Environment
{
    public function __construct(private readonly array $variables)
    {

    }

    public function get(EnviromentKey $key): string|null
    {
        return $this->variables[$key->value] ?? null;
    }
}
