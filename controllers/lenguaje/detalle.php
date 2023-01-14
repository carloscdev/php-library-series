<?php

if (empty($_GET["id"])) {
  header("location:lista.php");
} else {
  require_once "../../models/lenguaje.php";
  $id = $_GET["id"];
  $lenguaje = new Lenguaje();
  $query = $lenguaje->detail($id);
  $count = $query->rowCount();
  if ($count == 0) {
    header("location:lista.php");
  }
  $row = $query->fetch(PDO::FETCH_ASSOC);
}
