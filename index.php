<?php
include 'db.php';
$resultado = $conexion->query("SELECT * FROM tareas ORDER BY fecha DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Gestión de Tareas</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Gestión de Tareas</h1>
<a href="agregar.php" class="button">+ Agregar nueva tarea</a>
<table>
<tr>
<th>ID</th>
<th>Título</th>
<th>Descripción</th>
<th>Fecha</th>
<th>Acciones</th>
</tr>
<?php while ($row = $resultado->fetch_assoc()) { ?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= htmlspecialchars($row['titulo']); ?></td>
<td><?= htmlspecialchars($row['descripcion']); ?></td>
<td><?= $row['fecha']; ?></td>
<td class="actions">
<a href="editar.php?id=<?= $row['id']; ?>">Editar</a>
<a href="eliminar.php?id=<?= $row['id']; ?>" onclick="return confirm('¿Eliminar esta tarea?')">Eliminar</a>
</td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
