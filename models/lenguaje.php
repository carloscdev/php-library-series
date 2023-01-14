<?php

require_once "../../config/database.php";

class Lenguaje extends Database {
  private $table = "tbl_language";

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

  public function create($name, $iso) {
    $connection = $this->connect();
    $query = $connection->prepare("INSERT INTO $this->table (name, iso_code) VALUES(:name, :iso)");
    return $query->execute(array("name" => $name, "iso" => $iso));
  }

  public function update($id, $name, $iso) {
    $connection = $this->connect();
    $query = $connection->prepare("UPDATE $this->table SET name = :name, iso_code = :iso WHERE id = :id");
    return $query->execute(array("name" => $name, "iso" => $iso, "id" => $id));
  }

  public function remove($id) {
    $connection = $this->connect();
    $query = $connection->prepare("DELETE FROM $this->table WHERE id = :id");
    return $query->execute(array("id" => $id));
  }
}

