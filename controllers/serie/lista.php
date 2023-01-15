<?php
require_once "../../models/serie.php";

function getSerieList() {
  $serie = new Serie();
  $query = $serie->list();
  $response = $query->fetchAll(PDO::FETCH_ASSOC);
  return $response;
}
