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
      require_once "../../models/nacionalidad.php";
      $nacionalidad = new Nacionalidad();
      $query = $nacionalidad->list();
      $data = $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($data as $row) {
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
<p class="text-end">
  <small id="nationality" class="text-default">Tabla: tbl_nationality</small>
</p>