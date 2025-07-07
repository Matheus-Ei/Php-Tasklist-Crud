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

    require basePath('Views/tasks/index.php');
  }

  public function create() {
    // Creates a new task if the method is POST
    if(isMethod("POST")) {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $priority = $_POST['priority'];

      $this->taskModel->create($title, $description, $priority);

      redirect('/tasks');
    } else {
      $title = '';
      $description = '';
      $priority = '';
      $action='create'; 
      $submitText='Create'; 

      // If the method is not POST, show the create task form
      require basePath('Views/tasks/create.php');
    }
  }

  public function delete() {
    if(!isMethod("POST")) {
      redirect('/tasks');
    }

    $id = $_POST['id'];

    $this->taskModel->delete($id);

    redirect('/tasks');
  }

  public function update() {
    // Updates the task if the method is POST
    if(isMethod("POST")) {
      $id = $_POST['id'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $priority = $_POST['priority'];

      $this->taskModel->update($id, $title, $description, $priority);

      redirect('/tasks');
    } else {
      // If the method is not POST, show the update task form
      $id = htmlspecialchars($_GET['id']) ?? null;

      if (!$id) {
        redirect('/tasks');
      }

      $task = $this->taskModel->getById($id)[0];

      $title = $task['title'] ?? '';
      $description = $task['description'] ?? '';
      $priority = $task['priority'] ?? '';
      $action='update'; 
      $submitText='Update'; 

      if (!$task) {
        redirect('/tasks');
      }

      require basePath('Views/tasks/update.php');
    }
  }

  public function view() {
    $id = $_GET['id'] ?? null;

    if (!$id) {
      redirect('/tasks');
    }

    $task = $this->taskModel->getById($id)[0];

    if (!$task) {
      redirect('/tasks');
    }

    require basePath('Views/tasks/view.php');
  }
}
