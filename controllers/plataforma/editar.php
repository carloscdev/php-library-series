<?php

require_once "../../models/plataforma.php";

if (!empty($_POST["save"])) {
  if (
    !empty($_POST["name"]) &&
    !empty($_POST["description"])
  ) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];

    $plataforma = new Plataforma();
    $response = $plataforma->update($id, $name, $description);

    if ($response) {
      header("location:../../views/plataforma/lista.php");
    }  else {
      echo '<div class="alert alert-danger">No se pudo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar</div>';
  }
}
