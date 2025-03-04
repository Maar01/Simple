<?php declare(strict_types = 1);

use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;
use Maar10\Simple\Http\Controller\ProductsController;
use Maar10\Simple\Kernel;

$router = new Router();
$router->setStrategy((new ApplicationStrategy())->setContainer(Kernel::getContainer()));
$router->map('GET', '/', ProductsController::class);