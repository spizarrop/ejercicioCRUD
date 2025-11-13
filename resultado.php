<?php

// Modificar profesor
$nuevoNombre = $_GET['nuevoNombre'];
if ($idProfesor && $nuevoNombre != "") {
    $sql = "UPDATE profesores SET nombre='".$nuevoNombre."' WHERE idProfesor=".$idProfesor;
    $conexion->query($sql);
    echo "Modificacion realizada con exito!";
}

?>