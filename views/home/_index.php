<?php
$list = array(
  "serie" => array(
    "image" => "../../images/serie.jpg",
    "title" => "Series",
    "description" => "CRUD para la tabla tbl_serie",
    "path" => "../serie/lista.php",
  ),
  "actor" => array(
    "image" => "../../images/actor.jpg",
    "title" => "Actores",
    "description" => "CRUD para la tabla tbl_actor",
    "path" => "../actor/lista.php",
  ),
  "director" => array(
    "image" => "../../images/director.jpg",
    "title" => "Directores",
    "description" => "CRUD para la tabla tbl_director",
    "path" => "../director/lista.php",
  ),
  "platform" => array(
    "image" => "../../images/platform.jpg",
    "title" => "Plataforma",
    "description" => "CRUD para la tabla tbl_platform",
    "path" => "../plataforma/lista.php",
  ),
  "language" => array(
    "image" => "../../images/language.jpg",
    "title" => "Lenguajes",
    "description" => "CRUD para la tabla tbl_language",
    "path" => "../lenguaje/lista.php",
  ),
  "nationality" => array(
    "image" => "../../images/nationality.jpg",
    "title" => "Nacionalidades",
    "description" => "CRUD para la tabla tbl_nationality",
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
