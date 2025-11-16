<?php
require_once "conexionDB.php";
$conexion = new mysqli(SERVER,USER,PASS,DB);

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
    <form action="resuModificar.php" method="GET">
        <label>Nombre:</label><br>
        <?php
        echo "<input type='hidden' name='idProfesor' value='".$_GET['idProfesor']."'>";
        echo "<input type='text' name='nuevoNombre' value='".$nombre."'>";
        ?>
        <button type='submit'>Aplicar</button>
    </form>
</body>
</html>