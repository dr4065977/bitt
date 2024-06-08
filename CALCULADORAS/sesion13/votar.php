<?php
require 'conexion.php';
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Elección</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>

  <h1 class="display-4">Sistema de elección de jefe de grupo</h1>
        <p class="lead">2 M de TI</p>

    <div class="alert alert-success" role="alert">
    ¡Muchas gracias por participar en la elección de jefe de grupo! <a href="index.php" class="alert-link">Vuelva a la página principal</a>.
    </div>

    <?php
    // Obtenemos el id del usuario que está votando y su elección
    $id = $_GET['id'];
    $vota_a = $_GET['vota_a'];
    //$id=$_SESSION ['userid'];
    // Obtenemos la fecha y hora actual
    $fecha_hora_voto = date('Y-m-d H:i:s');    

    if (!empty($id) && !empty($vota_a)) {
        mysqli_query($mysqli, "UPDATE alumno SET vota_a=$vota_a,fecha_hora_voto='$fecha_hora_voto' WHERE id=$id");
    }
    
    session_destroy();
    mysqli_close($mysqli);
    ?>

    </div>
  </body>
</html>