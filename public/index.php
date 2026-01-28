<?php
require_once './app/core/Router.php';

use App\Core\Router;

$router = new Router();

// Register Routes
$router->add('GET',uri:'/students',controller:'StudentController',function:'index');
$router->add('GET',uri:'/students/create','StudentController',function:'create');
$router->add('GET',uri:'/students/[id}','StudentController',function:'show');

$router->run(); 
?>