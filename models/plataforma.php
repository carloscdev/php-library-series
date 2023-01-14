<?php

require_once "../../config/database.php";

class Plataforma extends Database {
  private $table = "tbl_platform";

  public function list() {
    $connection = $this->connect();
    $query = $connection->prepare("SELECT * FROM $this->table");
    $query->execute();
    return $query;
  }

  public function detail($id) {
    $connection = $this->connect();
    $query = $connection->prepare("SELECT * FROM $this->table WHERE id = :id");
    $query->execute(array("id" => $id));
    return $query;
  }

  public function create($name, $description) {
    $connection = $this->connect();
    $query = $connection->prepare("INSERT INTO $this->table (name, description) VALUES(:name, :description)");
    return $query->execute(array('name' => $name, 'description' => $description));
  }

  public function update($id, $name, $description) {
    $connection = $this->connect();
    $query = $connection->prepare("UPDATE $this->table SET name = :name, description = :description WHERE id = :id");
    return $query->execute(array("name" => $name, "description" => $description, "id" => $id));
  }

  public function remove($id) {
    $connection = $this->connect();
    $query = $connection->prepare("DELETE FROM $this->table WHERE id = :id");
    return $query->execute(array("id" => $id));
  }
}

