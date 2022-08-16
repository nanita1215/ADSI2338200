<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Date"?></title>
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
            <?php echo "<h1 class='mt-5'>Date Time</h1>";?>
            <hr>
            <!-- Space to work -->
            <div class="jumbotron">
					    <p class="lead text-center">
					    	<strong>Hour-min-seg: </strong>
					    	<?php echo date('h:i:s') ?>
					    </p>
					    <p class="lead text-center">
					    	<strong>Day-month-year: </strong>
					    	<?php echo date('d-m-Y') ?>
					    </p>
					    <p class="lead text-center">
					    	<strong>day name: </strong>
					    	<?php echo date('l') ?>
					    </p>
					    <p class="lead text-center">
					    	<strong>Full year: </strong>
					    	<?php echo date('Y') ?>
					    </p>
					    <p class="lead text-center">
					    	<strong>Time zone: </strong>
					    	<?php echo date('e') ?>
					    </p>
					    <p class="lead text-center">
					    	<strong>Time UNIX: </strong>
					    	<?php echo time() ?>
					    </p>
				    </div>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>