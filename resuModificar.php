<?php
require_once "conexionDB.php";
$conexion = new mysqli(SERVER,USER,PASS,DB);

$nuevoNombre = $_GET['nuevoNombre'];
$idProfesor = $_GET['idProfesor'];

if ($idProfesor && $nuevoNombre != "") {
    $sql = "UPDATE profesores SET nombre='".$nuevoNombre."' WHERE idProfesor=".$idProfesor;
    $conexion->query($sql);
    
    header("Location: index.php");
    exit;
}
?>