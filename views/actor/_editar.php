<?php
require_once "../../controllers/actor/detalle.php";
?>

<form method="POST" class="col-md-6 mx-auto" autocomplete="off">
  <?php require_once "../../controllers/actor/editar.php" ?>
  <input type="hidden" name="id" value="<?= $id ?>">
  <div class="form-group mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input
      class="form-control"
      id="name" name="name"
      placeholder="Ingresa el nombre del actor"
      value="<?= $row['name'] ?>"
    >
  </div>
  <div class="form-group mb-3">
    <label for="last_name" class="form-label">Apellidos</label>
    <input
      class="form-control"
      id="last_name"
      name="last_name"
      placeholder="Ingresa el apellido del actor"
      value="<?= $row['last_name'] ?>"
    >
  </div>
  <div class="form-group mb-3">
    <label for="date_birth" class="form-label">Fecha de Nacimiento</label>
    <input
      class="form-control"
      id="date_birth"
      name="date_birth"
      type="date"
      value="<?= $row['date_birth'] ?>"
    >
  </div>
  <div class="form-group mb-3">
    <label for="nationality" class="form-label">Nacionalidad</label>
    <select class="form-control" id="nationality" name="nationality">
      <option value="">Seleciona una opción</option>
      <?php
        require_once "../../controllers/nacionalidad/lista.php";
        $nacionalidad_list = getNacionalidadList();

        foreach ($nacionalidad_list as $item) {
      ?>
        <option
          value="<?= $item["id"] ?>"
          <?php
            if ($item["id"] == $row["nationality_id"]) {
              echo "selected";
            }
          ?>
        >
          <?= $item["name"] ?>
        </option>
      <?php
        }
      ?>
    </select>
    <div class="text-end">
      <a href="../nacionalidad/agregar.php">
        <small>Agregar Nacionalidad</small>
      </a>
    </div>
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
