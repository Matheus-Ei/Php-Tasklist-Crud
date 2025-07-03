<?php
namespace App\Controllers;

use App\Models\Tasks;

class TaskController {
  private $taskModel;

  public function __construct () {
    $this->taskModel = new Tasks();
  }

  public function index() {
    $tasks = $this->taskModel->getAll();

    require_once __DIR__ . '/../Views/tasks/index.php';
  }

  private function verifyMethodPost() {
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
      header('Location: /public/index.php/tasks');
    };
  }

  public function create() {
    $this->verifyMethodPost();

    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];

    $this->taskModel->create($title, $description, $priority);

    header('Location: /public/index.php/tasks');
  }

  public function delete() {
    $this->verifyMethodPost();

    $id = $_POST['id'];

    $this->taskModel->delete($id);

    header('Location: /public/index.php/tasks');
  }

  public function update() {
    $this->verifyMethodPost();

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];

    $this->taskModel->update($id, $title, $description, $priority);

    header('Location: /public/index.php/tasks');
  }

  public function view() {

  }
}
