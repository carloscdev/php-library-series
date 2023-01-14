<?php

$list = array(
  "actor" => array(
    "image" => "../../images/actor.jpg",
    "title" => "Actores",
    "description" => "Sssome quick example text to build on the card title",
    "path" => "../actor/lista.php",
  ),
  "director" => array(
    "image" => "../../images/director.jpg",
    "title" => "Directores",
    "description" => "Some2 quick example text to build on the card title",
    "path" => "../director/lista.php",
  ),
  "language" => array(
    "image" => "../../images/language.jpg",
    "title" => "Lenguajes",
    "description" => "Some quick example text to build on the card title",
    "path" => "../lenguaje/lista.php",
  ),
  "platform" => array(
    "image" => "../../images/platform.jpg",
    "title" => "Plataforma",
    "description" => "Somxe quick example text to build on the card title",
    "path" => "../plataforma/lista.php",
  ),
  "serie" => array(
    "image" => "../../images/serie.jpg",
    "title" => "Series",
    "description" => "Some cquick example text to build on the card title",
    "path" => "../serie/lista.php",
  ),
  "nationality" => array(
    "image" => "../../images/nationality.jpg",
    "title" => "Nacionalidades",
    "description" => "Some cquick xexample text to build on the card title",
    "path" => "../nacionalidad/lista.php",
  ),
);

?>

<section class="home">
  <?php
  foreach ($list as $value) {
  ?>
  <div class="card">
    <img
      src="<?= $value["image"] ?>"
      alt="actores"
    >
    <div class="card-body">
      <h3 class="card-title"><?= $value["title"] ?></h3>
      <p class="card-text">
        <?= $value["description"] ?>
      </p>
      <div class="d-grid">
        <a href="<?= $value["path"] ?>" class="btn btn-secondary">
          INGRESAR
        </a>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</section>
