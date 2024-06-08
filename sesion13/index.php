<?php
require 'conexion.php';

$query = mysqli_query($mysqli, "SELECT * FROM alumno ");

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
      
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resultados.php">Ver resultados</a>
      </li>
    </ul>

    <table class="table table-striped">

      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Candidato</td>
        <td>Vota a</td>
        <td>Login</td>
      </tr>

    <?php
    while($res = mysqli_fetch_array($query)) {
      echo "<tr>";
      echo "<td>".$res['id']."</td>";
      echo "<td>".$res['nombre']."</td>";
      echo "<td>".$res['apellido1']."</td>";
      echo "<td>".$res['apellido2']."</td>";
      echo "<td>".$res['candidato']."</td>";
      echo "<td>".$res['vota_a']."</td>";
      
      if (empty($res['vota_a'])) {
       echo "<td><a  href=\"login.php?id=".$res['id']."\"><button>Login</button></a></td>";
       // echo "<td><a href='login.php'><button>Login</button></a></td>"; 
      } else {
        echo "<td></td>";
      }
      echo "</tr>";
    }
    mysqli_close($mysqli);
    ?>
    </table>
    </div>
  </body>
</html>


