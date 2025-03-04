<?php

namespace Maar10\Simple\Http\Controller;

use Laminas\Diactoros\Response;
use Maar10\Simple\Repository\ProductRepository;

class ProductsController
{
    public function __construct(private readonly ProductRepository $repository)
    {

    }

    public function __invoke(): Response
    {
        var_dump($this->repository);exit;

        /*$response = new Response();
        $response->getBody()->write('hello from diactoros');
        return $response;*/
    }
}
