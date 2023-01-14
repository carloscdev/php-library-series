<?php

require_once "../../models/director.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $director = new Director();
  $response = $director->remove($id);
  if ($response) {
    header("location:../../views/director/lista.php");
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
