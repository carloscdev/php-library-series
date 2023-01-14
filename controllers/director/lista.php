<?php
require_once "../../models/director.php";

function getDirectorList() {
  $director = new Director();
  $query = $director->list();
  $response = $query->fetchAll(PDO::FETCH_ASSOC);
  return $response;
}
