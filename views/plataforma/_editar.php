<?php
require_once "../../controllers/plataforma/detalle.php";
?>

<form method="POST" class="col-md-6 mx-auto" autocomplete="off">
  <?php require_once "../../controllers/plataforma/editar.php" ?>
  <input type="hidden" name="id" value="<?= $id ?>">
  <div class="form-group mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input
      class="form-control"
      id="name" name="name"
      placeholder="Ingresa el nombre del lenguaje"
      value="<?= $row['name'] ?>"
      maxlength="30"
    >
  </div>
  <div class="form-group mb-3">
    <label for="description" class="form-label">Descripción</label>
    <textarea
      class="form-control"
      id="description"
      name="description"
      rows="5"
    ><?= $row['description'] ?></textarea>
  </div>
  <hr>
  <div class="d-grid gap-3">
    <button type="submit" name="save" class="btn btn-secondary" value="save">
      <i class="fa-solid fa-floppy-disk"></i>
      EDITAR
    </button>
    <a href="lista.php" class="btn btn-dark">
      <i class="fa-solid fa-arrow-left"></i>
      REGRESAR
    </a>
  </div>
</form>
