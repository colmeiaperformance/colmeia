<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logotipo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Sobre</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown04">
              <li><a class="dropdown-item" href="#">Empresa</a></li>
              <li><a class="dropdown-item" href="#">Equipe</a></li>
            </ul>
          </li>
      </ul>
      <form method="get" role="search" id="searchform" class="d-flex" action="<?php bloginfo('home'); ?>/">
              <input type="text" name="s" id="s"  class="form-control me-2" placeholder="Pesquisa" aria-label="Pesquisa">
              <input type="submit" name="submit"  id="search-button" value="Ok" class="btn btn-outline-primary">
      </form>
    </div>
  </div>
</nav>