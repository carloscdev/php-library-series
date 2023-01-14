<?php
require_once "../../models/plataforma.php";

function getPlatformList() {
  $plataforma = new Plataforma();
  $query = $plataforma->list();
  $response = $query->fetchAll(PDO::FETCH_ASSOC);
  return $response;
}
