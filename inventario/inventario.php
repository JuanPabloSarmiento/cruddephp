<?php require_once __DIR__ . '/../config.php';
$sql = "SELECT p.*, c.nombre as categoria_nombre FROM productos p LEFT JOIN categorias c ON p.categoria_id = c.id ORDER BY p.nombre";
$res = $conexion->query($sql);
?>
<!DOCTYPE html>
<html><head><meta charset='utf-8'><title>Inventario</title></head><body>
<h1>Inventario</h1>
<table border='1' style='border-collapse:collapse;'>
<tr><th>Producto</th><th>Categoría</th><th>Precio</th><th>Stock</th></tr>
<?php while($p = $res->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($p['nombre']) ?></td>
<td><?= htmlspecialchars($p['categoria_nombre']) ?></td>
<td>$<?= number_format($p['precio'],2) ?></td>
<td><?= $p['stock_actual'] ?></td>
</tr>
<?php endwhile; ?>
</table>
</body></html>