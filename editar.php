<?php
include 'db.php';
$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM tareas WHERE id=$id");
$tarea = $resultado->fetch_assoc();

if ($_POST) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $conexion->query("UPDATE tareas SET titulo='$titulo', descripcion='$descripcion' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Tarea</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Editar Tarea</h1>
<form method="POST">
<input type="text" name="titulo" value="<?= htmlspecialchars($tarea['titulo']); ?>" required>
<textarea name="descripcion"><?= htmlspecialchars($tarea['descripcion']); ?></textarea>
<button type="submit">Actualizar</button>
</form>
<a href="index.php" class="button">← Volver</a>
</div>
</body>
<!-- Cambio para feature/editar-tarea -->
</html>
