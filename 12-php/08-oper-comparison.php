<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Opr comparison"?></title>
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
            <?php echo "<h1 class='mt-5'>Operation comparison</h1>";?>
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
							<td> == </td>
							<td> Is equal </td>
							<td>5==8;</td>
							<td><?php echo var_dump(5==8); ?></td>
						</tr>
						<tr>
							<td> != </td>
							<td> Not equal </td>
							<td>5!=8;</td>
							<td><?php echo var_dump(5!=8); ?></td>
						</tr>
						<tr>
							<td> <> </td>
							<td> Diferent </td>
							<td>5<>8;</td>
							<td><?php echo var_dump(5<>8); ?></td>
						</tr>
						<tr>
							<td> > </td>
							<td> Great then </td>
							<td>5>8;</td>
							<td><?php echo var_dump(5>8); ?></td>
						</tr>
						<tr>
							<td> < </td>
							<td> less than </td>
							<td>5<8;</td>
							<td><?php echo var_dump(5<8); ?></td>
						</tr>
						<tr>
							<td> >= </td>
							<td> Great or equal </td>
							<td>5>=8;</td>
							<td><?php echo var_dump(5>=8); ?></td>
						</tr>
						<tr>
							<td> <= </td>
							<td> Less or equal </td>
							<td>5<=8;</td>
							<td><?php echo var_dump(5<=8); ?></td>
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