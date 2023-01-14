<?php

class Database {
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "library_db";
  private $charset = "utf8";

  public function connect() {
    try {
      $connection = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=" . $this->charset;
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
      ];
      $PDO = new PDO($connection, $this->username, $this->password, $options);
      return $PDO;
    } catch (PDOException $e) {
      echo 'Error de conexion: '.$e->getMessage();
    }
  }
}

