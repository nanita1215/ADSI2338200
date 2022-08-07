<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Strings"?></title>
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
        <div class="col-md-8 offset-md-2 text-center">
            <?php echo "<h1 class='mt-5 bg-warning'>Strings</h1>";?>
            <hr>
            <?php 
					// Concatenate
					$tbl1  = 'table';
					$tbl2  = 'table-bordered';
					$tbl3  = 'table-hover table-dark';
					$class = $tbl1." ".$tbl2." ".$tbl3." table-stripped";
					// Strings
					$string1 = "ADSI 2338200";
					$string2 = "sena caldas";
					$string3 = "Hello world";

				?>
				<table class="<?php echo $class; ?>">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Method</th>
							<th>Description</th>
							<th>String</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>strlen()</td>
							<td>string length</td>
							<td><?php echo $string1; ?></td>
							<td><?php echo strlen($string1); ?></td>
						</tr>
						<tr>
							<td>strpos()</td>
							<td>String match position</td>
							<td>2338200</td>
							<td><?php echo strpos($string1, '2338200'); ?></td>
						</tr>
						<tr>
							<td>strtoupper()</td>
							<td>String Upercase</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo strtoupper($string2); ?></td>
						</tr>
						<tr>
							<td>ucwords()</td>
							<td>First leter capitalize</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo ucwords($string2); ?></td>
						</tr>
						<tr>
							<td>strrev()</td>
							<td>Reverse String</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo strrev($string2); ?></td>
						</tr>
						<tr>
							<td>str_replace()</td>
							<td>Replace string</td>
							<td><?php echo $string3; ?></td>
							<td><?php echo str_replace("world", "Jeremias", $string3); ?></td>
						</tr>
						<tr>
							<td>substr()</td>
							<td>Substract string</td>
							<td><?php echo $string3; ?></td>
							<td><?php echo substr($string3, 5, 9); ?></td>
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