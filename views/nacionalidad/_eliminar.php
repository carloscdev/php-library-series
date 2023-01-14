<?php
  if (empty($_GET["id"])) {
    header("location:lista.php");
  } else {
    require_once "../../models/nacionalidad.php";
    $id = $_GET["id"];
    $nacionalidad = new Nacionalidad();
    $query = $nacionalidad->detail($id);
    $count = $query->rowCount();
    if ($count == 0) {
      header("location:lista.php");
    }
    $row = $query->fetch(PDO::FETCH_ASSOC);
  }
?>

<form method="POST" class="col-md-6 mx-auto">
  <?php require_once "../../controllers/nacionalidad/eliminar.php" ?>
  <input type="hidden" name="id" value="<?= $id ?>">
  <h3>
    ¿Estás seguro de eliminar <?= $row["name"] ?>?
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
