<?php
require_once "../../controllers/serie/detalle.php";
?>

<form method="POST" class="col-md-6 mx-auto">
  <?php require_once "../../controllers/serie/eliminar.php" ?>
  <input type="hidden" name="id" value="<?= $id ?>">
  <h3>
    ¿Estás seguro de eliminar <?= $row["title"] ?>?
  </h3>
  <hr>
  <div class="d-grid gap-3">
    <button type="submit" name="delete" class="btn btn-danger" value="delete">
      <i class="fa-solid fa-trash"></i>
      ELIMINAR
    </button>
    <a href="lista.php" class="btn btn-dark">
      <i class="fa-solid fa-arrow-left"></i>
      REGRESAR
    </a>
  </div>
</form>
