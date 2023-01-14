<?php

require_once "../../models/lenguaje.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $lenguaje = new Lenguaje();
  $response = $lenguaje->remove($id);
  if ($response) {
    header("location:../../views/lenguaje/lista.php");
  }  else {
    echo '<div class="alert alert-danger">No se puedo eliminar los datos.</div>';
  }
}
