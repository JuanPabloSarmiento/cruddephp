<?php
require_once __DIR__ . '/../config.php';
$sql = "SELECT * FROM tareas ORDER BY fecha_creacion DESC";
$result = $conexion->query($sql);
?>
<!DOCTYPE html>
<html>
<head><meta charset='utf-8'><title>Ver Tareas</title></head>
<body>
<h2>Mis Tareas</h2>
<ul>
<?php while($row = $result->fetch_assoc()): ?>
    <li><?= htmlspecialchars($row['tarea']) ?> - <?= $row['fecha_creacion'] ?></li>
<?php endwhile; ?>
</ul>
<a href='index.php'>Agregar otra</a>
</body>
</html>