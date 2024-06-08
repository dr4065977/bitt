<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnitos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, apellido1, apellido2 FROM alumno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellido1"]. " " . $row["apellido2"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>