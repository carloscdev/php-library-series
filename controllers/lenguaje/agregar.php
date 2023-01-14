<?php
require_once "../../models/lenguaje.php";

if (!empty($_POST["save"])) {
  if (
    !empty($_POST["name"]) &&
    !empty($_POST["iso"])
  ) {
    $name = $_POST["name"];
    $iso = $_POST["iso"];

    $lenguaje = new Lenguaje();

    $response = $lenguaje->create($name, $iso);
    if ($response) {
      header("location:../../views/lenguaje/lista.php");
    } else {
      echo '<div class="alert alert-danger">No se pudo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar.</div>';
  }
}
