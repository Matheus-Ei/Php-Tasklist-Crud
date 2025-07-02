<?php
namespace App\Controllers;

use App\Models\Tasks;

class TaskController {
    public function index()
    {
        $taskModel = new Tasks();
        $tasks = $taskModel->getAll();

        require_once __DIR__ . '/../Views/tasks/index.view.php';
    }
}
