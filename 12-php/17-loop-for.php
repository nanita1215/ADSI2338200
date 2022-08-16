<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Loops"?></title>
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
            <?php echo "<h1 class='mt-5'>Loop For</h1>";?>
            <hr>
            <!-- Space to work -->
            <nav>
			  		<ul class="pagination pagination-sm justify-content-center">
				    	<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<?php 
								for ($i=1; $i <=50 ; $i++) { 
									if ($i % 5 == 0) {
										if($i == 25) {
											echo '<li class="page-item active"><a class="page-link" href="#">'.$i.'</a></li>';
										} else {
											echo '<li class="page-item"><a class="page-link" href="#">'.$i.'</a></li>';
										}
									}
								}
						?>
					<li class="page-item"><a class="page-link" href="#">Next</a></li>
			  	</ul>
			</nav>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>