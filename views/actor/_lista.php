<table class="table table-hover" aria-describedby="actor">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Nacionalidad</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
      require_once "../../controllers/actor/lista.php";
      $list = getActorList();

      foreach($list as $row) {
    ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= $row["name"] ?></td>
      <td><?= date("d/m/Y", strtotime($row["date_birth"])) ?></td>
      <td><?= $row["nationality"] ? $row["nationality"] : '---' ?></td>
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
  <small id="actor" class="text-default">Tabla: tbl_actor</small>
</p>
