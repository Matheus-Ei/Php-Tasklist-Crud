<?php
namespace App\Models;

use Config\Database;

class Tasks {
  public function getAll() {
    return Database::select("SELECT * FROM tasks"); 
  }

  public function create($title, $description, $priority) {
    return Database::insert(
      "INSERT INTO tasks (title, description, priority) VALUES (:title, :description, :priority)",
      ["title" => $title, "description" => $description, "priority" => $priority]
    ); 
  }

  public function delete($id) {
    return Database::query(
      "DELETE FROM tasks WHERE id=:id",
      ["id" => $id]
    );
  }

  public function update($id, $title, $description, $priority) {
    return Database::query(
      "UPDATE tasks SET title = :title, description = :description, priority = :priority WHERE id = :id",
      ["id" => $id, "title" => $title, "description" => $description, "priority" => $priority]
    );
  }
}
