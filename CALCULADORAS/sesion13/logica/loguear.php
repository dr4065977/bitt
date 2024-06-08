<?php
require 'conexion.php';

session_start();


$clave = $_POST['uclave'];

$query = "SELECT  clave FROM alumno WHERE clave ='$clave'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result, MYSQLI_NUM);

    if ($row[0] == $clave){
      header ('Location: ../candidatos.php');
    }   
    else{
        echo "Datos incorrectos";
        return false;
    }
?>

