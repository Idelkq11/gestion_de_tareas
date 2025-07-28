<?php
include 'db.php';
$id = $_GET['id'];
$conexion->query("DELETE FROM tareas WHERE id=$id");
header("Location: index.php");
?>
<?php
/* Cambio para feature/eliminar-tarea */
