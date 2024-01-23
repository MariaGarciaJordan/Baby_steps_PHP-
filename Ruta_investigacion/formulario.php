<?php
$nombreErr = "";
$nombre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreErr = "El nombre es requerido";
  } else {
    $nombre = test_input($_POST["nombre"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
      $nombreErr = "Solo se permiten letras y espacios en blanco";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Nombre: <input type="text" name="nombre">
  <span class="error">* <?php echo $nombreErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Enviar">
</form>
