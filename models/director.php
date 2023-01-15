<?php

require_once "../../config/database.php";

class Director extends Database {
  private $table = "tbl_director";

  public function list() {
    $connection = $this->connect();
    $query = $connection->prepare(
      "SELECT a.id, CONCAT_WS(' ', a.name, a.last_name) AS name, a.date_birth, n.name AS nationality
      FROM $this->table a LEFT JOIN tbl_nationality n ON a.nationality_id = n.id"
    );
    $query->execute();
    return $query;
  }

  public function detail($id) {
    $connection = $this->connect();
    $query = $connection->prepare("SELECT * FROM $this->table WHERE id = :id");
    $query->execute(array("id" => $id));
    return $query;
  }

  public function create($name, $last_name, $date_birth, $nationality) {
    $connection = $this->connect();
    $query = $connection->prepare(
      "INSERT INTO $this->table (name, last_name, date_birth, nationality_id)
      VALUES(:name, :last_name, :date_birth, :nationality)"
    );
    return $query->execute(array($name, $last_name, $date_birth, $nationality));
  }

  public function update($id, $name, $last_name, $date_birth, $nationality) {
    $connection = $this->connect();
    $query = $connection->prepare(
      "UPDATE $this->table
      SET name = :name, last_name = :last_name, date_birth = :date_birth, nationality_id = :nationality
      WHERE id = :id"
    );
    return $query->execute(array($name, $last_name, $date_birth, $nationality, $id));
  }

  public function remove($id) {
    $connection = $this->connect();
    $query = $connection->prepare("DELETE FROM $this->table WHERE id = :id");
    return $query->execute(array("id" => $id));
  }
}

