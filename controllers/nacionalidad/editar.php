<?php

require_once "../../config/database.php";
$database = new Database();
$connection = $database->connect();

if (!empty($_POST["save"])) {
  if (
    !empty($_POST["name"]) &&
    !empty($_POST["population"])
  ) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $population = $_POST["population"];

    $query = $connection->prepare("UPDATE tbl_nationality SET name = :name, population = :population WHERE id = :id");
    $response = $query->execute(array("name" => $name, "population" => $population, "id" => $id));
    if ($response) {
      header("location:../../views/nacionalidad/lista.php");
    }  else {
      echo '<div class="alert alert-danger">No se puedo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar</div>';
  }
}
