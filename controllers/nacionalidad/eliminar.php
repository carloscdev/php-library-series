<?php

require_once "../../models/nacionalidad.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $nacionalidad = new Nacionalidad();
  $response = $nacionalidad->remove($id);
  if ($response) {
    header("location:../../views/nacionalidad/lista.php");
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
