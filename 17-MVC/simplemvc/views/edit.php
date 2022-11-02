<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MVC - OOP</title>
<link rel="stylesheet" href="../public/css/custom.css">
<script src="public/js/tailwind.3.2.1.js"></script>
<head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5">
        <h1> <i class="fa fa-pencil"></i> Update User</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./">
                <i class="fa fa-users"></i>
                List All Users 
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Update User
            </li>
          </ol>
        </nav>
        <?php 
          while($row = mysqli_fetch_array($data)) {
        ?>
        <form action="./" method="post" enctype="multipart/form-data">
              <input type="hidden" name="method" value="update">
              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="form-group">
                  <label for="names">Full Name :</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?> required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="birthdate">Birthdate:</label>
                  <input type="date" class="form-control" name="birthdate" placeholder="yyyy-mm-dd" value="<?php echo $row['birthdate'] ?>" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="email">E-mail:</label>
                  <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="photo">Photo:</label>
                  <input type="file" class="form-control-file" accept="image/*" name="photo">
                </div>
                <!--  -->
                <div class="form-group">
                  <button class="btn btn-success">
                      <i class="fa fa-save"></i>
                      Modificar
                  </button>
                  <button type="reset" class="btn btn-dark">
                      <i class="fa fa-eraser"></i>
                      Limpiar
                  </button>
                </div>
              </form>

        <?php
          }
        ?>
      </div>
    </div>
  </div>
  
</body>
</html>