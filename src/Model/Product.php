<?php

namespace Maar10\Simple\Model;

class Product
{
    public function __construct(public readonly string $name, public string $description)
    {

    }
}
