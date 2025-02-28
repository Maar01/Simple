<?php declare(strict_types = 1);

use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

require '../vendor/autoload.php';
require '../config/routes.php';

/** @var \League\Route\Router $router */


$emitter = new SapiEmitter();
$emitter->emit($router->dispatch(ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES)));

