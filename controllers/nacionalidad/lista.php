<?php

require_once "../../models/nacionalidad.php";

function getNacionalidadList() {
  $nacionalidad = new Nacionalidad();
  $query = $nacionalidad->list();
  $response = $query->fetchAll(PDO::FETCH_ASSOC);
  return $response;
}
