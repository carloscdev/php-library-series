<?php

require_once "../../config/database.php";

class Nacionalidad extends Database {
  private $table = "tbl_nationality";

  public function list() {
    $connection = $this->connect();
    $query = $connection->prepare("SELECT * FROM $this->table");
    $query->execute();
    return $query;
  }

  public function detail($id) {
    $connection = $this->connect();
    $query = $connection->prepare(" SELECT * FROM $this->table WHERE id = :id ");
    $query->execute(array("id" => $id));
    return $query;
  }

  public function create($name, $population) {
    $connection = $this->connect();
    $query = $connection->prepare("INSERT INTO $this->table (name, population) VALUES(:name, :population)");
    return $query->execute(array('name' => $name, 'population' => $population));
  }

  public function remove($id) {
    $connection = $this->connect();
    $query = $connection->prepare("DELETE FROM $this->table WHERE id = :id");
    return $query->execute(array("id" => $id));
  }
}

