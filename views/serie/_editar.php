<?php
require_once "../../controllers/serie/detalle.php";
?>

<form method="POST" class="col-md-6 mx-auto" autocomplete="off">
  <?php require_once "../../controllers/serie/editar.php" ?>
  <input type="hidden" name="id" value="<?= $id ?>">
  <div class="form-group mb-3">
    <label for="title" class="form-label">Título</label>
    <input
      class="form-control"
      id="title"
      name="title"
      placeholder="Ingresa el título de la serie"
      value="<?= $row['title'] ?>"
    >
  </div>
  <div class="form-group">
    <label for="platform" class="form-label">Plataforma</label>
    <select class="form-control" id="platform" name="platform">
      <option selected value="">Seleciona una opción</option>
      <?php
        require_once "../../controllers/plataforma/lista.php";
        $plataforma_list = getPlatformList();

        foreach ($plataforma_list as $platform_item) {
      ?>
      <option
        value="<?= $platform_item["id"] ?>"
        <?php
          if ($platform_item["id"] == $row["platform_id"]) {
            echo "selected";
          }
        ?>
      >
        <?= $platform_item["name"] ?>
      </option>
      <?php
      }
    ?>
    </select>
    <div class="text-end">
      <a href="../plataforma/agregar.php">
        <small>Agregar Plataforma</small>
      </a>
    </div>
  </div>
  <div class="form-group mb-3">
    <label for="director" class="form-label">Director</label>
    <select class="form-control" id="director" name="director">
      <option selected value="">Seleciona una opción</option>
      <?php
        require_once "../../controllers/director/lista.php";
        $director_list = getDirectorList();

        foreach ($director_list as $director_item) {
      ?>
      <option
        value="<?= $director_item["id"] ?>"
        <?php
          if ($director_item["id"] == $row["director_id"]) {
            echo "selected";
          }
        ?>
      >
        <?= $director_item["name"] ?>
      </option>
      <?php
      }
    ?>
    </select>
    <div class="text-end">
      <a href="../director/agregar.php">
        <small>Agregar Director</small>
      </a>
    </div>
  </div>
  <div class="form-group">
    <label class="form-label mt-4">Actores</label>
    <div class="row">
      <?php
        require_once "../../controllers/actor/lista.php";
        $actor_list_checked = getSerieActorList();
        $actor_checked = array();
        $actor_list = getActorList();
        foreach($actor_list_checked as $checked) {
          array_push($actor_checked, $checked["id"]);
        }

        foreach ($actor_list as $actor_item) {
      ?>
      <div class="col-sm-6">
        <input
          type="checkbox"
          <?= in_array($actor_item["id"], $actor_checked) ? 'checked' : '' ?>
          id="<?= $actor_item["id"] ?>"
          name="actor[]"
          value="<?= $actor_item["id"] ?>"
          class="form-check-input"
        >
        <label for="<?= $actor_item["id"]?>" class="form-check-label"><?= $actor_item["name"] ?></label>
      </div>
      <?php
      }
      ?>
    </div>
    <div class="text-end">
      <a href="../actor/agregar.php">
        <small>Agregar Actor</small>
      </a>
    </div>
  </div>
  <div class="form-group">
    <label class="form-label mt-4">Subtitulos</label>
    <div class="row">
      <?php
        require_once "../../controllers/lenguaje/lista.php";
        $language_list_checked = getSerieLanguageList('subtitulo');
        $language_checked = array();
        $lenguaje_list = getLanguageList();

        foreach($language_list_checked as $checked) {
          array_push($language_checked, $checked["id"]);
        }

        foreach ($lenguaje_list as $lenguaje_item) {
      ?>
      <div class="col-sm-6">
        <input
          type="checkbox"
          <?= in_array($lenguaje_item["id"], $language_checked) ? 'checked' : '' ?>
          id="<?= $lenguaje_item["id"] + 1000 ?>""
          name="subtitle[]"
          value="<?= $lenguaje_item["id"] ?>"
          class="form-check-input"
        >
        <label for="<?= $lenguaje_item["id"] + 1000 ?>" class="form-check-label"><?= $lenguaje_item["name"] ?></label>
      </div>
      <?php
      }
      ?>
    </div>
    <div class="text-end">
      <a href="../lenguaje/agregar.php">
        <small>Agregar Lenguaje</small>
      </a>
    </div>
  </div>
  <div class="form-group">
    <label class="form-label mt-4">Audio</label>
    <div class="row">
      <?php
        require_once "../../controllers/lenguaje/lista.php";
        $audio_list_checked = getSerieLanguageList('audio');
        $audio_checked = array();
        $lenguaje_list = getLanguageList();

        foreach($audio_list_checked as $checked) {
          array_push($audio_checked, $checked["id"]);
        }

        foreach ($lenguaje_list as $lenguaje_item) {
      ?>
      <div class="col-sm-6">
        <input
          type="checkbox"
          <?= in_array($lenguaje_item["id"], $audio_checked) ? 'checked' : '' ?>
          id="<?= $lenguaje_item["id"] + 10000 ?>""
          name="audio[]"
          value="<?= $lenguaje_item["id"] ?>"
          class="form-check-input"
        >
        <label for="<?= $lenguaje_item["id"] + 10000 ?>" class="form-check-label"><?= $lenguaje_item["name"] ?></label>
      </div>
      <?php
      }
      ?>
    </div>
    <div class="text-end">
      <a href="../lenguaje/agregar.php">
        <small>Agregar Lenguaje</small>
      </a>
    </div>
  </div>
  <hr>
  <div class="d-grid gap-3">
    <button type="submit" name="save" class="btn btn-secondary" value="save">
      <i class="fa-solid fa-floppy-disk"></i>
      GUARDAR
    </button>
    <a href="lista.php" class="btn btn-dark">
      <i class="fa-solid fa-arrow-left"></i>
      REGRESAR
    </a>
  </div>
</form>

