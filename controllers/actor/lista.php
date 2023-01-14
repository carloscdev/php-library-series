<?php
require_once "../../models/actor.php";

function getActorList() {
  $actor = new Actor();
  $query = $actor->list();
  $response = $query->fetchAll(PDO::FETCH_ASSOC);
  return $response;
}
