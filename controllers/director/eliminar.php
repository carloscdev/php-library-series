<?php

require_once "../../models/director.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $director = new Director();
  $response = $director->remove($id);
  if ($response) {
    echo '<script> location.replace("../../views/director/lista.php"); </script>';
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
