<?php

require_once "../../models/serie.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $serie = new Serie();
  $response = $serie->remove($id);
  if ($response) {
    echo '<script> location.replace("../../views/serie/lista.php"); </script>';
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
