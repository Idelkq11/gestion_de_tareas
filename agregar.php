<?php
include 'db.php';
if ($_POST) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $conexion->query("INSERT INTO tareas (titulo, descripcion) VALUES ('$titulo', '$descripcion')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Agregar Tarea</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Agregar Nueva Tarea</h1>
<form method="POST">
<input type="text" name="titulo" placeholder="Título de la tarea" required>
<textarea name="descripcion" placeholder="Descripción"></textarea>
<button type="submit">Guardar</button>
</form>
<a href="index.php" class="button">← Volver</a>
</div>
</body>
<!-- Cambio para feature/agregar-tarea -->
</html>
