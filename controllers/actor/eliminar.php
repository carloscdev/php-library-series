<?php

require_once "../../models/actor.php";

if (!empty($_POST["delete"])) {
  $id = $_POST["id"];
  $actor = new Actor();
  $response = $actor->remove($id);
  if ($response) {
    header("location:../../views/actor/lista.php");
  }  else {
    echo '<div class="alert alert-danger">No se pudo eliminar los datos.</div>';
  }
}
