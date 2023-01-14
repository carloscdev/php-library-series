<?php

if (empty($_GET["id"])) {
  header("location:lista.php");
} else {
  require_once "../../models/nacionalidad.php";
  $id = $_GET["id"];
  $nacionalidad = new Nacionalidad();
  $query = $nacionalidad->detail($id);
  $count = $query->rowCount();
  if ($count == 0) {
    header("location:lista.php");
  }
  $row = $query->fetch(PDO::FETCH_ASSOC);
}
