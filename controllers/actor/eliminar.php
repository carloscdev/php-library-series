<?php

require_once "../../models/actor.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $actor = new Actor();
  $response = $actor->remove($id);
  if ($response) {
    echo '<script> location.replace("../../views/actor/lista.php"); </script>';
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
