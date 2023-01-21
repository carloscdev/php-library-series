<?php

if (empty($_GET["id"])) {
  echo '<script> location.replace("lista.php"); </script>';
} else {
  require_once "../../models/actor.php";
  $id = $_GET["id"];
  $actor = new Actor();
  $query = $actor->detail($id);
  $count = $query->rowCount();
  if ($count == 0) {
    echo '<script> location.replace("lista.php"); </script>';
  }
  $row = $query->fetch(PDO::FETCH_ASSOC);
}
