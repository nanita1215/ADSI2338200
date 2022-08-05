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
    <main class="container">
    <div class="row">
        <div class="col-8 offset-2 text-center">
        <?php 
					$alert1   = 'alert alert-success alert-dismissible fade show text-start';
					$alert2   = 'alert alert-warning alert-dismissible fade show text-start';
					$alert3   = 'alert alert-danger alert-dismissible fade show text-start';
					$user1    = 1;
					$user2    = 2;
					$user3    = 3;
				?>
				<div class="<?php echo $alert1; ?>"> 
					<strong>User <?php echo $user1; ?> the information is correct</strong>
					<button type="button" class="close" data-dismiss="alert">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				</div>
				<div class="<?php echo $alert2; ?>"> 
					<strong>User<?php echo $user2; ?> the information is incorrect</strong>
					<button type="button" class="close" data-dismiss="alert">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				</div>
				<div class="<?php echo $alert3; ?>"> 
					<strong>User <?php echo $user3; ?> the information is not register </strong>
					<button type="button" class="close" data-dismiss="alert">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				</div>
            
        
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>