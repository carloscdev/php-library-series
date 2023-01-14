<?php
require_once "../../models/nacionalidad.php";

if (!empty($_POST["save"])) {
  if (
    !empty($_POST["name"]) &&
    !empty($_POST["population"])
  ) {
    $name = $_POST["name"];
    $population = $_POST["population"];

    $nacionalidad = new Nacionalidad();

    $response = $nacionalidad->create($name, $population);
    if ($response) {
      header("location:../../views/nacionalidad/lista.php");
    } else {
      echo '<div class="alert alert-danger">No se puedo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar.</div>';
  }
}
