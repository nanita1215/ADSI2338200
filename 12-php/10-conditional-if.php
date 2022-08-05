<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Hello World"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div>
  


        
        </main class= 'container'>
        ?php $day = date('D'); ?>
                        <?php if ($day == "Mon"): ?>
                            <span class="badge badge-pill badge-warning">Hoy es Lunes</span>
                        <?php elseif ($day == "Tue"): ?>
                            <span class="badge badge-pill badge-warning">Hoy es Martes</span>
                        <?php elseif ($day == "Wed"): ?>
                            <span class="badge badge-pill badge-warning">Hoy es Miércoles</span>
                        <?php elseif ($day == "Thu"): ?>
                            <span class="badge badge-pill badge-warning">Hoy es Jueves</span>
                        <?php elseif ($day == "Fri"): ?>
                            <span class="badge badge-pill badge-warning">Hoy es Viernes</span>
                        <?php else: ?>
                            <span class="badge badge-pill badge-success">Feliz fin de Semana</span>
                        <?php endif ?>
        
                        </div>
        <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
