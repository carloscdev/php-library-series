<table class="table table-hover" aria-describedby="nationality">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Población</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
      require_once "../../controllers/nacionalidad/lista.php";
      $list = getNacionalidadList();
      foreach($list as $row) {
    ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= $row["name"] ?></td>
      <td><?= $row["population"] ?></td>
      <td class="d-flex justify-content-end gap-1">
        <a href="editar.php?id=<?= $row["id"] ?>" class="btn btn-small btn-dark">
          <i class="fa-solid fa-pen"></i>
        </a>
        <a href="eliminar.php?id=<?= $row["id"] ?>" class="btn btn-small btn-danger">
          <i class="fa-solid fa-trash"></i>
        </a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<?php
if (count($list) == 0) {
  require_once "../../components/empty.php";
}
?>
<p class="text-end">
  <small id="nationality" class="text-default">Tabla: tbl_nationality</small>
</p>
