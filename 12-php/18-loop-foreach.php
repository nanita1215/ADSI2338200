<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Loop"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <div class="navbar-brand row">
           <a class="navbar-brand col"  href="https://www.php.net/manual/es/intro-whatis.php">PHP </a><a class="navbar-brand col" href="https://getbootstrap.com/">& Bootstrap 5</a>
        </div>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Loop ForEach</h1>";?>
            <hr>
            <!-- Space to work -->
            <?php 
					$buttons = array('btn-danger', 'btn-warning', 'btn-success', 'btn-primary', 'btn-info', 'btn-secondary', 'btn-dark', 'btn-light', 'btn-link', 'btn-custom');
				?>
				<?php foreach ($buttons as $button): ?>
					<button class="btn btn-lg btn-block col my-2 <?php echo $button; ?>">
						<?php echo $button; ?>
					</button>
				<?php endforeach ?>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>