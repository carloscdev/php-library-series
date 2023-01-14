<?php
require_once "../../models/actor.php";

if (!empty($_POST["save"])) {
  if (
    !empty($_POST["name"]) &&
    !empty($_POST["last_name"]) &&
    !empty($_POST["date_birth"]) &&
    !empty($_POST["nationality"])
  ) {
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $date_birth = $_POST["date_birth"];
    $nationality = $_POST["nationality"];

    $actor = new Actor();

    $response = $actor->create($name, $last_name, $date_birth, $nationality);
    if ($response) {
      header("location:../../views/actor/lista.php");
    } else {
      echo '<div class="alert alert-danger">No se pudo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar.</div>';
  }
}
