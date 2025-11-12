<?php
require_once "conexionDB.php";

// Creamos la conexion
$conexion = new mysqli(SERVER,USER,PASS,DB);

// Crear profesor
if (isset($_GET['crear'])) {
    $nombre = $_GET['nombre'];
    if ($nombre != "") {
		$sql = "INSERT INTO profesores (nombre) VALUES ('".$nombre."')";
        $conexion->query($sql);
    }
}

// Modificar profesor
if (isset($_GET['modificar'])) {
    $id = $_GET['profesores'];
    $nuevoNombre = $_GET['nombre'];
    if ($id && $nuevoNombre != "") {
		$sql = "UPDATE profesores SET nombre='".$nuevoNombre."' WHERE idProfesor=".$id;
        $conexion->query($sql);
    }
}

// Eliminar profesor
if (isset($_GET['eliminar'])) {
    $id = $_GET['profesores'];
    if ($id) {
		$sql = "DELETE FROM profesores WHERE idProfesor=".$id;
        $conexion->query($sql);
    }
}

// Obtener lista de profesores
$sql = "SELECT * FROM profesores ORDER BY nombre";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Profesores</title>
</head>
<body>
    <h2>Gestión de Profesores</h2>

    <form method="GET">
        <label>Seleccionar profesor:</label><br>
        <select name="profesores">
            <?php 
			while ($fila = $resultado->fetch_assoc()) { 
                echo "<option value=".$fila['idProfesor'].">".$fila['nombre']."</option>";
            }
			?>
        </select>
		<br><br>

        <input type="text" name="nombre" placeholder="Nombre nuevo o a crear">
        <br><br>

        <button type="submit" name="crear">Crear</button>
        <button type="submit" name="modificar">Modificar</button>
        <button type="submit" name="eliminar">Eliminar</button>
    </form>
</body>
</html>
