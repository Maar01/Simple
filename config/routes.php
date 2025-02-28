<?php declare(strict_types = 1);

use League\Route\Router;
use Maar10\Simple\Http\Controller\ProductsController;

$router = new Router();
$router->map('GET', '/foo', ProductsController::class);