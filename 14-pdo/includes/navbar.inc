<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <i class="fa fa-dragon"></i>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTop">
      <ul class="navbar-nav me-auto my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>


      <ul class="navbar-nav me-auto my-2 my-lg-0">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toogle" role="button" data-bs-toggle="">
            <img src="<?php echo $_SESSION['tphoto'] ?>" class="me-2 img-fluid rounded" >
            <?php echo $_SESSION['temail'] ?>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="pokemons.index.php" class="dropdown item">
                <i class="fa fa-paw"></i>
              </a>
            </li>

            <li>
              <a href="gyms.index.php" class="dropdown item">
                <i class="fa fa-paw"></i>
              </a>
            </li>

            <li>
              <a href="pokemons.index.php" class="dropdown item">
                <i class="fa fa-paw"></i>
              </a>
            </li>
          </ul>
        </li>
      </ul>






        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>