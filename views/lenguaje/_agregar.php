<form method="POST" class="col-md-6 mx-auto" autocomplete="off">
  <?php require_once "../../controllers/lenguaje/agregar.php" ?>
  <div class="form-group mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input
      class="form-control"
      id="name"
      name="name"
      placeholder="Ingresa el nombre del lenguaje"
      maxlength="30"
    >
  </div>
  <div class="form-group mb-3">
    <label for="iso" class="form-label">Código ISO</label>
    <input
      class="form-control"
      id="iso"
      name="iso"
      placeholder="Ingresa el código ISO"
      maxlength="5"
    >
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
