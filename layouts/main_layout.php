<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link rel="stylesheet" href="../../styles/main.css">
  <title><?= $title ?></title>
</head>
<body>
  <?php
  include("../../components/navbar.php");
  include("../../components/info.php");
  ?>
  <main class="container my-5" style="min-height: 500px;">
    <h1 class="d-sm-flex justify-content-between align-items-center">
      <span><?= $title ?></span>
      <?php
        if ($showButton) {
      ?>
        <div class="d-grid mt-3 mt-sm-0">
          <a href="agregar.php" class="btn btn-secondary">
            <i class="fa-solid fa-plus"></i>
            AGREGAR
          </a>
        </div>
      <?php
        }
      ?>
    </h1>
    <hr class="mb-5">
    <?php include($childView); ?>
  </main>
  <?php
  include("../../components/footer.php");
  ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
  ></script>
</body>
</html>
