<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

require_once __DIR__ . '/../config/database.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/public/index.php/tasks/':
        require_once __DIR__ . '/../src/Controllers/TaskController.php';
        $controller = new App\Controllers\TaskController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo "<h1>Page not found</h1>";
        break;
}
