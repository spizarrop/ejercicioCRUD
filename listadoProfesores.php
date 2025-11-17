<?php
require_once "conexionDB.php";

// Creamos la conexion
$conexion = new mysqli(SERVER,USER,PASS,DB);

// Obtener lista de profesores
$sql = "SELECT * FROM profesores ORDER BY nombre";
$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Profesores</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Gestión de Profesores</h2>
    <label>Lista de profesores:</label><br>
        <?php
        while ($fila = $resultado->fetch_assoc()) {
            echo "<label>".$fila['nombre']."</label>";
            echo "<a href='modificar.php?idProfesor=".$fila['idProfesor']."' class='button'>Modificar</a>";
            echo "<a href='eliminar.php?idProfesor=".$fila['idProfesor']."' class='button'>Eliminar</a>";
            echo "<br>";
        }
        ?>
</body>
</html>