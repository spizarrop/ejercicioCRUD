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
        <label>¿Seguro que deseas eliminar a <?php $_GET['nombre'] ?> de la lista de profesores?</label><br>
        <button type='submit' name='eliminar'>Eliminar</button>
    </form>
</body>
</html>