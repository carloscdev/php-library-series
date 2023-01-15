<?php
require_once "../../models/serie.php";

if (!empty($_POST["save"])) {
  if (
    !empty($_POST["title"]) &&
    !empty($_POST["platform"]) &&
    !empty($_POST["director"]) &&
    !empty($_POST["actor"]) &&
    !empty($_POST["subtitle"]) &&
    !empty($_POST["audio"]) &&
    is_array($_POST["actor"]) &&
    is_array($_POST["subtitle"]) &&
    is_array($_POST["audio"])
  ) {
    $title = $_POST["title"];
    $platform = $_POST["platform"];
    $director = $_POST["director"];
    $actor = $_POST["actor"];
    $subtitle = $_POST["subtitle"];
    $audio = $_POST["audio"];

    $serie = new Serie();
    $response = $serie->create($title, $platform, $director);
    $query = $response["query"];
    $new_id = $response["new_id"];

    if ($query) {
      foreach ($actor as $actor_item) {
        $serie->addActor($actor_item, $new_id);
      }
      foreach ($subtitle as $subtitle_item) {
        $serie->addLanguage('subtitulo', $new_id, $subtitle_item);
      }
      foreach ($audio as $audio_item) {
        $serie->addLanguage('audio', $new_id, $audio_item);
      }
      header("location:../../views/serie/lista.php");
    } else {
      echo '<div class="alert alert-danger">No se pudo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar.</div>';
  }
}
