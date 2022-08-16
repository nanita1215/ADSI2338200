<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Functions"?></title>
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
            <?php echo "<h1 class='mt-5'>Functions Return</h1>";?>
            <hr>
            <!-- Space to work -->
            <?php 
					function show_name($name) {
						return $name;
					}
					function show_result($n1, $n2) {
						return $n1 * $n2;
					}
				?>
				<div class="mx-4 p-4 bg-warning text-dark rounded">
				  <div class="container">
				    <h1 class="display-4"><?php echo show_name('Hideo Kojima'); ?></h1>
				    <p class="lead"> 23 * 15 = <?php echo show_result(23, 15); ?></p>
				  </div>
				</div>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>