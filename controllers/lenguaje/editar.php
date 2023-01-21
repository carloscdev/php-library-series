<?php

require_once "../../models/lenguaje.php";

if (!empty($_POST["save"])) {
  if (
    !empty($_POST["name"]) &&
    !empty($_POST["iso"])
  ) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $iso = $_POST["iso"];

    $lenguaje = new Lenguaje();
    $response = $lenguaje->update($id, $name, $iso);

    if ($response) {
      echo '<script> location.replace("../../views/lenguaje/lista.php"); </script>';
    }  else {
      echo '<div class="alert alert-danger">No se pudo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar</div>';
  }
}
