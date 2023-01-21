<?php

require_once "../../models/plataforma.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $plataforma = new Plataforma();
  $response = $plataforma->remove($id);
  if ($response) {
    echo '<script> location.replace("../../views/plataforma/lista.php"); </script>';
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
