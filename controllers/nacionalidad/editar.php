<?php

require_once "../../models/nacionalidad.php";

if (!empty($_POST["save"])) {
  if (
    !empty($_POST["name"]) &&
    !empty($_POST["population"])
  ) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $population = $_POST["population"];

    $nacionalidad = new Nacionalidad();
    $response = $nacionalidad->update($id, $name, $population);

    if ($response) {
      header("location:../../views/nacionalidad/lista.php");
    }  else {
      echo '<div class="alert alert-danger">No se pudo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar</div>';
  }
}
