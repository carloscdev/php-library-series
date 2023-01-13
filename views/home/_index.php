<?php

$list = array(
  "actor" => array(
    "image" => "../../images/actor.jpg",
    "title" => "Actores",
    "description" => "Sssome quick example text to build on the card title",
    "path" => "views/actor.php",
  ),
  "director" => array(
    "image" => "../../images/director.jpg",
    "title" => "Directores",
    "description" => "Some2 quick example text to build on the card title",
    "path" => "views/director.php",
  ),
  "language" => array(
    "image" => "../../images/language.jpg",
    "title" => "Lenguajes",
    "description" => "Some quick example text to build on the card title",
    "path" => "views/lenguaje.php",
  ),
  "platform" => array(
    "image" => "../../images/platform.jpg",
    "title" => "Plataforma",
    "description" => "Somxe quick example text to build on the card title",
    "path" => "views/plataforma.php",
  ),
  "serie" => array(
    "image" => "../../images/serie.jpg",
    "title" => "Series",
    "description" => "Some cquick example text to build on the card title",
    "path" => "views/serie.php",
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
        <a href="#" class="btn btn-secondary">
          INGRESAR
        </a>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</section>
