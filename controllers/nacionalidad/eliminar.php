<?php

require_once "../../models/nacionalidad.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $nacionalidad = new Nacionalidad();
  $response = $nacionalidad->remove($id);
  if ($response) {
    echo '<script> location.replace("../../views/nacionalidad/lista.php"); </script>';
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
