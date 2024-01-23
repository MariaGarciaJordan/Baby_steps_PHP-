<!-- ¿Cómo conecto código PHP a mi base de datos? Haz el servicio de conexión -->
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
} else {
  echo "Conexión exitosa";
}

$conn->close();

?>
