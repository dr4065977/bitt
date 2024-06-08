<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd="alumnos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $bd);

// Check connection
if (!$conn) {
  die("No se conecto! " . mysqli_connect_error());
}
//echo "Conexión exitosa! ";
?>