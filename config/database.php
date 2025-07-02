<?php

namespace Config;

use PDO;
use PDOException;

class Database {
  static $pdo = null;

  public static function connect() {
    if (self::$pdo === null) {
      $host = $_ENV['DATABASE_HOST'];
      $port = $_ENV['DATABASE_PORT'];
      $dbname = $_ENV['DATABASE_NAME'];
      $user = $_ENV['DATABASE_USER'];
      $password = $_ENV['DATABASE_PASSWORD'];

      $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

      try {
        self::$pdo = new PDO($dsn, $user, $password, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
      } catch (PDOException $e) {
        die("Error connecting the database: " . $e->getMessage());
      }
    }
    
    return self::$pdo;
  }

  public static function get() {
    return self::connect();
  }

  public static function disconnect() {
    self::$pdo = null;
  }

  public static function select($query, $params = []) {
    $stmt = self::get()->prepare($query);
    $stmt->execute($params);
    return $stmt->fetchAll();
  }

  public static function insert($query, $params = []) {
    $stmt = self::get()->prepare($query);
    $stmt->execute($params);
    return self::get()->lastInsertId();
  }

  public static function update($query, $params = []) {
    $stmt = self::get()->prepare($query);
    return $stmt->execute($params);
  }

  public static function delete($query, $params = []) {
    $stmt = self::get()->prepare($query);
    return $stmt->execute($params);
  }
}
