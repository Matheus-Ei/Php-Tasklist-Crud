<?php

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

require_once '../src/helpers.php';

require_once '../config/database.php';
require_once '../config/routes.php';

// Initialize the controller and method variables
$controller = null;
$method = null;

// Get the requested URI and method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Iterate through the routes to find a match controller and method
foreach ($routes as $route => $config) {
  if ($uri === '/' . $route) {
    $controller = $config['controller'];
    $method = $config['method'];
    break;
  }
}

if ($controller && method_exists($controller, $method)) {
  $controllerInstance = new $controller(); // Create an instance of the controller
  $controllerInstance->$method(); // Call the method on the controller instance
} else {
  http_response_code(404);
  echo '<h1>404 Not Found</h1>';
}
