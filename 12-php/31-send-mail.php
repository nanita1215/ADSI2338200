<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Send-Email"?></title>
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
            <?php echo "<h1 class='mt-5'>Send email</h1>";?>
            <hr>
            <!-- Space to work -->
            <form action="" method="POST">
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" rows="4" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Send" class="btn btn-outline-success">
                        <input type="reset" value="Clear Form" class="btn btn-outline-secondary">
                    </div>
                </form>
                <?php 
                    if ($_POST) {
                        $email   = $_POST['email'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                ?>
                <?php if (mail('juan.valencia927@misena.edu.co', "Subject: $subject", "Message: $message", "From: $email")): ?>
                    <div class="alert alert-success">
                        The email has been sent successfully!
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger">
                        The email could not be sent!
                    </div>
                <?php endif ?>
                <?php } ?>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>