<table class="table table-hover" aria-describedby="serie">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Plataforma</th>
      <th scope="col">Director</th>
      <th scope="col">Actores</th>
      <th scope="col">Subtitulos</th>
      <th scope="col">Audio</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
      require_once "../../controllers/serie/lista.php";
      $list = getSerieList();

      foreach($list as $row) {
    ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= $row["title"] ?></td>
      <td><?= $row["platform"] ? $row["platform"] : '---' ?></td>
      <td><?= $row["director"] ? $row["director"] : '---' ?></td>
      <td><?= $row["actor"] ? $row["actor"] : '---' ?></td>
      <td><?= $row["subtitle"] ? $row["subtitle"] : '---' ?></td>
      <td><?= $row["audio"] ? $row["audio"] : '---' ?></td>
      <td>
        <div class="d-flex justify-content-end gap-1">
          <a href="editar.php?id=<?= $row["id"] ?>" class="btn btn-small btn-dark">
            <i class="fa-solid fa-pen"></i>
          </a>
          <a href="eliminar.php?id=<?= $row["id"] ?>" class="btn btn-small btn-danger">
            <i class="fa-solid fa-trash"></i>
          </a>
        </div>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<p class="text-end">
  <small id="serie" class="text-default">Tabla: tbl_serie</small>
</p>
