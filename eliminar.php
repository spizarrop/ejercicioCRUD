<?php
require_once "conexionDB.php";

// Creamos la conexion
$conexion = new mysqli(SERVER,USER,PASS,DB);

// Obtener nombre del profesor
$sql = "SELECT nombre FROM profesores WHERE idProfesor=".$_GET['idProfesor'];
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
$nombre = $fila['nombre'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
</head>
<body>
    <form action="resuEliminar.php" method="GET">
        <label>¿Seguro que deseas eliminar a <?php echo $nombre ?> de la lista de profesores?</label><br>
        <?php echo "<input type='hidden' name='idProfesor' value='".$_GET['idProfesor']."'>"; ?>
        <button type='submit' name='eliminar'>Eliminar</button>
    </form>
</body>
</html>