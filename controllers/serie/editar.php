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
    $id = $_POST["id"];
    $title = $_POST["title"];
    $platform = $_POST["platform"];
    $director = $_POST["director"];
    $actor = $_POST["actor"];
    $subtitle = $_POST["subtitle"];
    $audio = $_POST["audio"];

    $serie = new Serie();
    $response = $serie->update($id, $title, $platform, $director);

    if ($response) {
      $serie->removeActor($id);
      foreach ($actor as $actor_item) {
        $serie->addActor($actor_item, $id);
      }
      $serie->removeLanguage($id, 'subtitulo');
      foreach ($subtitle as $subtitle_item) {
        $serie->addLanguage('subtitulo', $id, $subtitle_item);
      }
      $serie->removeLanguage($id, 'audio');
      foreach ($audio as $audio_item) {
        $serie->addLanguage('audio', $id, $audio_item);
      }
      echo '<script> location.replace("../../views/serie/lista.php"); </script>';
    }  else {
      echo '<div class="alert alert-danger">No se pudo guardar los datos.</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Completa todos los campos para continuar</div>';
  }
}
