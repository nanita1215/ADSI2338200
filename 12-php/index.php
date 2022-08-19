<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Main Menu(PHP)"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Main Menu(PHP)</h1>";?>
            <hr>
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 24rem">
                <a href="01-hello-world.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">01</span> hello-world</a>

                <a href="02-info.php" target="_blank" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">02</span> info</a>

                <a href="03-comments.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">03</span> comments</a>

                <a href="04-variables.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">04</span> variables</a>

                <a href="05-strings.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">05</span> strings</a>

                <a href="06-oper-arithmetics.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">06</span> oper-arithmetics</a>

                <a href="07-oper-assignement.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">07</span> oper-assignemt</a>

                <a href="08-oper-comparison.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">08</span> oper-comparison</a>

                <a href="09-oper-logics.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">09</span> oper-logics</a>

                <a href="10-conditional-if.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">10</span> conditional-if</a>

                <a href="11-conditional-switch.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">11</span> conditional-switch</a>

                <a href="12-arrays-index-numeric.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">12</span> arrays-index-numeric</a>

                <a href="13-arrays-associative.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">13</span> arrays-associative</a>

                <a href="14-arrays-multi.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">14</span> arrays-multi</a>

                <a href="15-loop-while.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">15</span> loop-while</a>

                <a href="16-loop-dowhile.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">16</span> loop-dowhile</a>

                <a href="17-loop-for.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">17</span> loop-for</a>

                <a href="18-loop-foreach.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">18</span> loop-foreach</a>

                <a href="19-functions.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">19</span> functions</a>

                <a href="20-functions-params.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">20</span> functions-params</a>

                <a href="21-functions-return.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">21</span> functions-return</a>

                <a href="22-forms-get.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">22</span> forms-get</a>

                <a href="23-forms-post.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">23</span> forms-post</a>

                <a href="24-date-time.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">24</span> functions-params</a>

                <a href="25-challenge-dates.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">25</span> functions-params</a>

                <a href="26-ssi.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">26</span> functions-params</a>

                <a href="27-file-text.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">27</span> file-text</a>

                <a href="28-upload-files.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">28</span> upload-files</a>

                <a href="29-cookies.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">29</span> cookies</a>

                <a href="30-sesions.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">30</span> sesions</a>

                <a href="31-send-mail.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">31</span> send-mail</a>

                <a href="32-exceptions.php" class="btn btn-outline-info text-start"><span class="badge rounded-pill bg-dark">32</span> exceptions</a>



            </div>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>