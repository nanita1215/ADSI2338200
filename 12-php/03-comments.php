<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Hello World"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="·">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="01-hello-world.php">01-hello-world</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="02-info.php">02-info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="03-comments.php">03-comments</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php 
                echo "<h1 class='mt-5'>Hello World!</h1><hr>";
            ?>
            <?php
            // Definimos las clases del boton
				$clases = "btn btn-lg btn-outline-primary";
				/*
					btn                = Boton
					btn-lg              = Boton Grande
					btn-block           = Boton Bloque
					btn-outline-primary = Boton de borde Azul
				*/
				# Se imprime la variable $clases dentro de class
				?>
				<a href="javascript:;" class="<?=$clases?>"> Esto es un Boton </a>

        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>