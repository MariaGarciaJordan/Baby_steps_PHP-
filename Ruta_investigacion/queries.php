<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Seleccionar datos
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Mostrar datos de cada fila
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nombre: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 resultados";
}

//  Insertar datos
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo registro creado con éxito";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//  Actualizar datos
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Registro actualizado con éxito";
} else {
  echo "Error al actualizar el registro: " . $conn->error;
}

$conn->close();
?>
