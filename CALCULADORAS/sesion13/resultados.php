<?php

require 'conexion.php';

// Obtenemos el recuento de votos
$con = "SELECT a.vota_a, count(*) as votos, b.nombre, b.apellido1, b.apellido2 ";
$con .= "FROM alumno a, alumno b ";
$con .= "WHERE a.vota_a > 0 AND a.vota_a = b.id ";
$con .= "GROUP BY a.vota_a ";
$con .= "ORDER BY votos DESC";
$query = mysqli_query($mysqli, $con);
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
  
        <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Ver resultados</a>
      </li>
    </ul>

    <table class="table table-striped">

      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Número de votos</td>
      </tr>

    <?php
    while($res = mysqli_fetch_array($query)) {
      echo "<tr>";
      echo "<td>".$res['vota_a']."</td>";
      echo "<td>".$res['nombre']."</td>";
      echo "<td>".$res['apellido1']."</td>";
      echo "<td>".$res['apellido2']."</td>";
      echo "<td>".$res['votos']."</td>";
      echo "</tr>";
    }
    mysqli_close($mysqli);
    ?>
    </table>
    </div>
  </body>
</html>