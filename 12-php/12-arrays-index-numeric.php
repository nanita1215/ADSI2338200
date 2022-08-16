<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Variables"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
      <div class="container-fluid">
      <a class="navbar-brand"> <a class="navbar-brand" href="https://www.php.net/manual/es/intro-whatis.php">PHP </a><a class="navbar-brand" href="https://getbootstrap.com/">& Bootstrap 5</a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Array-index</h1>";?>
            <!-- Space to work -->
            <?php 
					# Asignación de Índice automático
					$cars = array('Volkswagen', 'Toyota', 'Renault');
					# Asignación de Índice manual
					$cars[3] = 'Fiat';
					$cars[4] = 'Mazda';
					$cars[5] = 'Chevrolet';

					// var_dump($cars);
				?>
				<div class="btn-group my-2">
				<?php foreach ($cars as $car => $index): ?>
					<button type="button" class="btn btn-dark">
						<?php echo $car ?>
					</button>
				<?php endforeach ?>
				</div>
            <hr>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>