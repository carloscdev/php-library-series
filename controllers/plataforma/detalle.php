<?php

if (empty($_GET["id"])) {
  echo '<script> location.replace("lista.php"); </script>';
} else {
  require_once "../../models/plataforma.php";
  $id = $_GET["id"];
  $plataforma = new Plataforma();
  $query = $plataforma->detail($id);
  $count = $query->rowCount();
  if ($count == 0) {
    echo '<script> location.replace("lista.php"); </script>';
  }
  $row = $query->fetch(PDO::FETCH_ASSOC);
}
