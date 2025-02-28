<?php

namespace Maar10\Simple\Http\Controller;

use Laminas\Diactoros\Response;

class ProductsController
{
    public function __invoke(): Response
    {
        $response = new Response();
        $response->getBody()->write('hello from diactoros');
        return $response;
    }
}
