<?php

if (empty($_GET["id"])) {
  echo '<script> location.replace("lista.php"); </script>';
} else {
  require_once "../../models/nacionalidad.php";
  $id = $_GET["id"];
  $nacionalidad = new Nacionalidad();
  $query = $nacionalidad->detail($id);
  $count = $query->rowCount();
  if ($count == 0) {
    echo '<script> location.replace("lista.php"); </script>';
  }
  $row = $query->fetch(PDO::FETCH_ASSOC);
}
