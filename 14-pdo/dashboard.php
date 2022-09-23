<?php $title = 'Dashboard'?>
<?php include_once('includes/header.inc'); ?>
<?php include_once('includes/navbar.inc'); ?>


<!-- header include -->
    <main class="container">
        <section class="row">
            <div class="col-md-8 offset-md-2 my-5">
                <h1 class="text-center">
                    <i class="fa-solid fa-user"></i>
                    Web App Pokemons
                </h1>
                <hr>
                <h2 class="text-center">
                    <i class="fa fa-cog"></i>
                    Dashboard
                </h2>
                <hr>
                Trainer: <?php echo $_SESSION['temail']?>
                <a href="close.php" class="btn btn-link">Close Session</a>
            </div>
        </section>
        <?php $conx = null; ?>
    </main>
    <!-- scripts include -->
    <?php include ('includes/scripts.inc')?>
    <!--  -->
    <script>
        $(document).ready(function () {
            
        });
    </script>
</body>
</html>