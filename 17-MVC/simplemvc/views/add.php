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
        <h1> <i class="fa fa-plus"></i> Adicionar Usuario</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./">
                <i class="fa fa-users"></i>
                Lista de Usuarios
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Adicionar Usuario
            </li>
          </ol>
        </nav>
        <form action="./" method="post" enctype="multipart/form-data">
              <input type="hidden" name="method" value="store">
                <div class="form-group">
                  <label for="fullname">Nombre Completo:</label>
                  <input type="text" class="form-control" name="fullname" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="birthdate">Fecha Nacimiento:</label>
                  <input type="date" class="form-control" name="birthdate" placeholder="yyyy-mm-dd" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="email">Correo Electrónico:</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="photo">Foto:</label>
                  <input type="file" class="form-control-file" accept="image/*" name="photo" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="password">Contraseña:</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <button class="btn btn-success">
                      <i class="fa fa-save"></i>
                      Guardar
                  </button>
                  <button type="reset" class="btn btn-dark">
                      <i class="fa fa-eraser"></i>
                      Limpiar
                  </button>
                </div>
              </form>
      </div>
    </div>
  </div>
  
</body>
</html>