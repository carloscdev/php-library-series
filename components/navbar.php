<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../home" style="font-size: 2rem;">
      <img src="../../images/logo.png" alt="Logo" width="50" height="50">
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarColor01"
      aria-controls="navbarColor01"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="../home">Inicio
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            href="" role="button"
            aria-haspopup="true" aria-expanded="false"
          >Dashboard</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../serie/lista.php">Series</a>
            <a class="dropdown-item" href="../actor/lista.php">Actores</a>
            <a class="dropdown-item" href="../director/lista.php">Directores</a>
            <a class="dropdown-item" href="../plataforma/lista.php">Plataformas</a>
            <a class="dropdown-item" href="../lenguaje/lista.php">Lenguajes</a>
            <a class="dropdown-item" href="../nacionalidad/lista.php">Nacionalidad</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <a
          data-bs-toggle="offcanvas"
          href="#offcanvasExample"
          role="button"
          aria-controls="offcanvasExample"
          class="btn btn-dark my-sm-0"
        >
          <i class="fa-solid fa-circle-info"></i>
          Información
        </a>
      </form>
    </div>
  </div>
</nav>
