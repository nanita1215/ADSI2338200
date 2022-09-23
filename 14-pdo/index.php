<?php $title = 'Login'?>
<?php include_once('includes/header.inc');?>
<!-- header include -->
    <main class="container">
        <section class="row">
            <div class="col-md-4 offset-md-4 my-5">
                <h1 class="text-center">
                    <i class="fa-solid fa-user"></i>
                    Web App Pokemons
                </h1>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <figure class="figure">
                            <img src="public/images/pokeball.png" width="240" id="preview" class="figure-img img-fluid img-thumbnail rounded">
                        </figure>
                    </div>
                    <h3>Login for trainers</h3>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="mail@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark btn-lg form-control">
                        <i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i>
                            Login
                        </button>
                        <button type="reset" class="btn btn-ligth btn-lg form-control mt-2">
                            <i class="fa-solid fa-user"></i>
                            Register
                        </button>
                    </div>
				</form>
                <?php
                    if($_POST){
                        $email = $_POST['email'];
                        $pass = md5($_POST['password']);
                        if(login($conx, $email, $pass)){
                            echo "<script>
                                    window.location.replace('dashboard.php')
                                </script>
                            ";
                        }else {
                            $_SESSION['error'] = "Email or Password are incorrect!";
                        }
                    }
                ?>
                
            </div>
        </section>
        <?php $conx = null; ?>
    </main>
    <!-- scripts include -->
    <?php include ('includes/scripts.inc')?>
    <!--  -->
    <script>
        $(document).ready(function () {
            <?php if(isset($_SESSION['error'])):?>
                    Swal.fire({
                        position: 'top-center',
                        icon: 'error',
                        title: '<?=$_SESSION['error']?>',
                        showConfirmButton: false,
                        timer:2000
                })    
            <?php endif?>
            <?php unset($_SESSION['error'])?>
        });
    </script>
</body>
</html>