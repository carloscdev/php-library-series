<?php

require_once "../../models/lenguaje.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $lenguaje = new Lenguaje();
  $response = $lenguaje->remove($id);
  if ($response) {
    echo '<script> location.replace("../../views/lenguaje/lista.php"); </script>';
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
