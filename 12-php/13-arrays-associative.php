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
        <button class="navbar-brand" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-brand-icon"></span>
        </button>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Variables</h1>";?>
            <!-- Space to work -->
            <?php 
					$studends = array('Tanjiro Kamado'    => 16, 
						              'Nezuko Kamado'     => 15, 
						              'Zenitsu Agatsuma'  => 17,
						              'Inosuke Hashibira' => 18);
					$studends['Genya Shinazugawa'] = 20;
					$studends['Kanao Tsuyuri']     = 19;

					//var_dump($studends);
				?>
          <div class="btn-group-vertical" style="width: 18rem">
              <?php foreach ($studends as $key => $value): ?>
              <button type="button" class="btn btn-primary text-start">
                <?php echo $key ?><span class="badge rounded-pill bg-dark float-end"> Age: <?php echo $value ?></span>
					    </button>
				    <?php endforeach ?>
			    </div>

        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>