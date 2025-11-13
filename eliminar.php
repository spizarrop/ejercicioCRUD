<?php

// Eliminar profesor
if (isset($_GET['eliminar'])) {
    if ($idProfesor) {
		$sql = "DELETE FROM profesores WHERE idProfesor=".$idProfesor;
        $conexion->query($sql);
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
</head>
<body>
    <form method="GET">
        <label>Nombre:</label><br>
        <input type="text" name="nuevoNombre" value="<?php $_GET['nombre'] ?>">
        <button type='submit' name='eliminar'>Eliminar</button>
    </form>
</body>
</html>