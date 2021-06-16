<?php
namespace Src;

class Database {

  private $dbConnection = null;

  public function __construct()
  {
    $host = $_ENV['DB_HOST'];
    $port = $_ENV['DB_PORT'];
    $db   = $_ENV['DB_DATABASE'];
    $user = $_ENV['DB_USERNAME'];
    $pass = $_ENV['DB_PASSWORD'];

    try {
      $this->dbConnection = new \PDO(
          "mysql:host=$host;port=$port;dbname=$db",
          $user,
          $pass
      );
    } catch (\PDOException $e) {
      exit($e->getMessage());
    }
  }

  public function connet()
  {
    return $this->dbConnection;
  }
}