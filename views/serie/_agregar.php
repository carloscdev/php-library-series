<form method="POST" class="col-md-6 mx-auto" autocomplete="off">
  <?php require_once "../../controllers/serie/agregar.php" ?>
  <div class="form-group mb-4">
    <label for="title" class="form-label">Título</label>
    <input
      class="form-control"
      id="title"
      name="title"
      placeholder="Ingresa el título de la serie"
      maxlength="50"
    >
  </div>
  <div class="form-group">
    <label for="platform" class="form-label">Plataforma</label>
    <select class="form-control" id="platform" name="platform">
      <option selected value="">Seleciona una opción</option>
      <?php
        require_once "../../controllers/plataforma/lista.php";
        $plataforma_list = getPlatformList();

        foreach ($plataforma_list as $row) {
      ?>
      <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
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
  <div class="form-group">
    <label for="director" class="form-label">Director</label>
    <select class="form-control" id="director" name="director">
      <option selected value="">Seleciona una opción</option>
      <?php
        require_once "../../controllers/director/lista.php";
        $director_list = getDirectorList();

        foreach ($director_list as $row) {
      ?>
      <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
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
        $actor_list = getActorList();

        foreach ($actor_list as $actor_item) {
      ?>
      <div class="col-sm-6">
        <input
          type="checkbox"
          id="<?= $actor_item["id"]?>"
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
        $lenguaje_list = getLanguageList();

        foreach ($lenguaje_list as $lenguaje_item) {
      ?>
      <div class="col-sm-6">
        <input
          type="checkbox"
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
        $lenguaje_list_audio = getLanguageList();

        foreach ($lenguaje_list_audio as $lenguaje_audio) {
      ?>
      <div class="col-sm-6">
        <input
          type="checkbox"
          id="<?= $lenguaje_audio["id"] + 10000 ?>""
          name="audio[]"
          value="<?= $lenguaje_audio["id"] ?>"
          class="form-check-input"
        >
        <label
          for="<?= $lenguaje_audio["id"] + 10000 ?>"
          class="form-check-label"
        ><?= $lenguaje_audio["name"] ?></label>
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
