<?php
// Crea una BBD
$servername = "localhost";
$username = "username";
$password = "password";

//  conexión
$conn = new mysqli($servername, $username, $password);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// base de datos
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada con éxito";
} else {
  echo "Error al crear la base de datos: " . $conn->error;
}

$conn->close();

?>

