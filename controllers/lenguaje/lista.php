<?php

require_once "../../models/lenguaje.php";

function getLanguageList() {
  $lenguaje = new Lenguaje();
  $query = $lenguaje->list();
  $response = $query->fetchAll(PDO::FETCH_ASSOC);
  return $response;
}
