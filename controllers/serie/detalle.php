<?php

if (empty($_GET["id"])) {
  header("location:lista.php");
}
require_once "../../models/serie.php";
$id = $_GET["id"];
$serie = new Serie();
$query = $serie->detail($id);
$count = $query->rowCount();
if ($count == 0) {
  header("location:lista.php");
}
$row = $query->fetch(PDO::FETCH_ASSOC);

function getSerieActorList() {
  $id = $_GET["id"];
  $serie = new Serie();
  $response = $serie->byActor($id);
  return $response->fetchAll(PDO::FETCH_ASSOC);
}

function getSerieLanguageList($type) {
  $id = $_GET["id"];
  $serie = new Serie();
  $response = $serie->byLanguage($id, $type);
  return $response->fetchAll(PDO::FETCH_ASSOC);
}
