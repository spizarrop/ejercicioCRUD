<?php
require_once "conexionDB.php";
$conexion = new mysqli(SERVER,USER,PASS,DB);

$idProfesor = $_GET['idProfesor'];

if ($idProfesor) {
    $sql = "DELETE FROM profesores WHERE idProfesor=".$idProfesor;
    $conexion->query($sql);
    
    header("Location: index.php");
    exit;
}
?>