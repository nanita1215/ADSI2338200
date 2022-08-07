<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Opr logics"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Operators logics</h1>";?>
            <hr>
            <table class="table table-bordered table-striped table-hover table-dark">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Operator</th>
							<th>Description</th>
							<th>Example</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> && </td>
							<td> Y </td>
							<td>$x=6; $y=3; ($x<10 && $y>1)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_dump($x<10 && $y>1); 
								?>
							</td>
						</tr>
						<tr>
							<td> || </td>
							<td> O </td>
							<td>$x=6; $y=3; ($x==5 || $y==5)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_dump($x==5 || $y==5); 
								?>
							</td>
						</tr>
						<tr>
							<td> ! </td>
							<td> No </td>
							<td>$x=6; $y=3; !($x==$y)</td>
							<td>
								<?php 
									$x=6; 
									$y=3;
									echo var_dump(!($x==$y)); 
								?>
							</td>
						</tr>
					</tbody>
				</table>

        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>