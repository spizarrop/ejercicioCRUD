<?php
require_once "conexionDB.php";

// Creamos la conexion
$conexion = new mysqli(SERVER,USER,PASS,DB);

// Obtener nombre del profesores
$sql = "SELECT nombre FROM profesores WHERE idProfesor=".$_GET['idProfesor'];
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
$nombre = $fila['nombre'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
</head>
<body>
    <form action="resultado.php" method="GET">
        <label>Nombre:</label><br>
        <?php echo "<input type='text' name='nuevoNombre' value='".$nombre."'>"; ?>
        <button type='submit' name='aplicar'>Aplicar</button>
    </form>
</body>
</html>