<?php
namespace App\Models;

use Config\Database;

class Tasks {
    public function getAll() {
        return Database::select("SELECT * FROM tasks"); 
    }
}
