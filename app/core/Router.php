<?php
namespace App\Core;

use App\Controllers\StudentsController;

class Router
{
private array $routes = [];

public function add[];

public function run(string $method, string $uri, string $controller,string $function)
{
$This->route[] = [
   'method' => $method,
   'uri' =>  $uri,
   'controller' =>$controller,
   'Funcition' => $function,
];
}
   $method = $_SERVER['REQUEST_METHOD'];
   $uri = parse_url($_SERVER['REQUEST_URI'], component: PHP_URL_PATH);
   
foreeach($this->routers as $route) {
      
}


   if ($method = 'GET' && $uri = '/students') {
   require_once './app/controllers/studentController.php';
   $controller = new StudentsController();
   $controller->index();
    return;
   }
  if ($method = 'GET' && $uri = '/students') {
  require_once './app/controllers/studentController.php';
   $controller = new StudentsController();
   $controller->Create();
    return;

}

http_response_code(response_code: 404);
echo '<h1>404 - Page Not Found</h1>';

   }


}

?>