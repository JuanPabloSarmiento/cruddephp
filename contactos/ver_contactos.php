<?php
require_once __DIR__ . '/../config.php';
$sql = "SELECT * FROM contactos ORDER BY nombre ASC";
$res = $conexion->query($sql);
?>
<!DOCTYPE html>
<html>
<head><meta charset='utf-8'><title>Contactos</title></head>
<body>
<h1>Mi Agenda de Contactos</h1>
<table border='1' style='border-collapse:collapse;'>
<tr><th>Nombre</th><th>Teléfono</th><th>Email</th><th>Fecha</th><th>Acciones</th></tr>
<?php while($c = $res->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($c['nombre']) ?></td>
<td><?= htmlspecialchars($c['telefono']) ?></td>
<td><?= htmlspecialchars($c['email']) ?></td>
<td><?= $c['fecha_agregado'] ?></td>
<td><a href='editar_contacto.php?id=<?= $c['id'] ?>'>Editar</a> | <a href='eliminar_contacto.php?id=<?= $c['id'] ?>'>Eliminar</a></td>
</tr>
<?php endwhile; ?>
</table>
<br><a href='index.php'>Agregar nuevo contacto</a>
</body>
</html>