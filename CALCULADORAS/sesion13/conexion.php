<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd="alumnos";

// Crear conexión
$mysqli = mysqli_connect($servername, $username, $password, $bd);

// Verificar conexion
if (!$mysqli) {
  die("No se conecto! " . mysqli_connect_error());
}
echo "Conexión exitosa! ";
?>