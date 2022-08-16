<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Challenge"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <div class="navbar-brand row">
           <a class="navbar-brand col"  href="https://www.php.net/manual/es/intro-whatis.php">PHP</a><a class="navbar-brand col" href="https://getbootstrap.com/">Bootstrap 5</a>
           <a class="col navbar-brand" href="/index.php">home</a>
        </div>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Challenge-dates</h1>";?>
            <hr>
            <!-- Space to work -->
            <form action="" method="POST">
					<div class="mb-3 text-start">
						<label for="name" class="form-label">Enter you birthday:</label>
						<input type="date" class="form-control" name="birthD" id="name">
            <div class="invalid-feedback">  
             Please Enter you birthday
            </div>
					</div>
					<div class="mb-3">
						<input type="submit" class="btn btn-success" value="birthD">
					</div>
				</form>
				<?php if ($_POST): ?>
          <?php
          // Usando diff y DateTime
          echo "Usando diff y DateTime";
  				$fecha_nacimiento = new DateTime($_POST['birthD']);
          $hoy = new DateTime();
          $edad = $hoy->diff($fecha_nacimiento);
          // var_dump($edad);
          ?>
          <div class="alert alert-success">
						<strong>Age:</strong> <?php echo $edad->y;?>
						<hr>
					</div>

          <?php
          // Usando date_diff
          echo "Usando date_diff";
          $fecha_nacimiento = $_POST['birthD'];
          $dia_actual = date("Y-m-d");
          $edad_diff = date_diff(date_create($fecha_nacimiento), date_create($dia_actual));
          // var_dump($edad);
          ?>
          <div class="alert alert-success">
						<strong>Age:</strong> <?php echo $edad_diff->format('%y');?>
						<hr>
					</div>
				<?php endif ?>
        </div>
    </div>
            
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>