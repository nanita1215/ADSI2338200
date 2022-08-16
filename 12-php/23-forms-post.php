<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Forms"?></title>
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
            <?php echo "<h1 class='mt-5'>Forms Post</h1>";?>
            <hr>
            <!-- Space to work -->
            <form action="" method="POST">
					<div class="mb-3 text-start">
						<label for="name" class="form-label">Full Name:</label>
						<input type="text" class="form-control <?php if ($_POST && empty($_POST['name'])):?> is-invalid <?php endif?>" name="name" id="name">
            <div class="invalid-feedback">  
              Please Write a full name
            </div>
					</div>
					<div class="mb-3 text-start">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control <?php if ($_POST and empty($_POST['email'])):?> is-invalid <?php endif?>" name="email" id="email">
            <div class="invalid-feedback">
              Please Write an email
            </div>
					</div>
					<div class="mb-3">
						<input type="submit" class="btn btn-success" value="Send Form">
						<input type="reset" class="btn btn-light" value="Clear Form">
					</div>
				</form>
				<?php if ($_POST): ?>
  				<?php if (!empty($_POST['name']) && !empty($_POST['email'])): ?>
					<div class="alert alert-success">
						<strong>Full Name:</strong> <?php echo $_POST['name']; ?>
						<br>
						<strong>Email:</strong> <?php echo $_POST['email']; ?>
					</div>
  				<?php endif ?>
				<?php endif ?>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>