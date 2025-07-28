<?php
$conexion = new mysqli("localhost", "root", "", "gestion_de_tareas");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
