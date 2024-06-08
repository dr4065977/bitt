<?php

require 'conexion.php';
session_start();
// Obtenemos los datos de los alumnos de la base de datos y los ordenamos por apellidos
$query = mysqli_query($mysqli, "SELECT * FROM alumno ORDER BY apellido1,apellido2 ASC");
?>

<!doctype html>
<html lang="es">
  <head>
    <title>Elección</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
  <h1 class="display-4">Sistema de elección de jefe de grupo</h1>
        <p class="lead">2 M de TI</p>
  <h2>Vote por algun candidato</h2>
    <table class="table table-striped">
      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Candidato</td>
        <td>Votar</td>
      </tr>

    <?php
    
    // Obtenemos el id del usuario que está votando
    $id = $_GET['id'];

    while($res = mysqli_fetch_array($query)) {
      echo "<tr>";
      echo "<td>".$res['id']."</td>";
      echo "<td>".$res['nombre']."</td>";
      echo "<td>".$res['apellido1']."</td>";
      echo "<td>".$res['apellido2']."</td>";
      echo "<td>".$res['candidato']."</td>";
      echo "<td><a  href=\"votar.php?id=$id&vota_a=".$res['id']."\"><button>Votar</button></a></td>";
      echo "</tr>";
     $_SESSION['userid']=$res['id'];
         }
    mysqli_close($mysqli);
    session_destroy();
    ?>
    </table>
  </body>
</html>