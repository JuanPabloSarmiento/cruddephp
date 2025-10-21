<?php require_once __DIR__ . '/../config.php';
$categorias = $conexion->query('SELECT * FROM categorias');
$proveedores = $conexion->query('SELECT * FROM proveedores');
?>
<!DOCTYPE html>
<html><head><meta charset='utf-8'><title>Agregar Producto</title></head><body>
<form method='POST' action='procesar_producto.php'>
Nombre: <input name='nombre' required><br>
Descripción:<br><textarea name='descripcion'></textarea><br>
Precio: <input type='number' step='0.01' name='precio' required><br>
Stock Inicial: <input type='number' name='stock' value='0' required><br>
Stock Mínimo: <input type='number' name='stock_minimo' value='5'><br>
Categoría: <select name='categoria_id'>
<?php while($cat=$categorias->fetch_assoc()): ?>
<option value='<?= $cat['id'] ?>'><?= htmlspecialchars($cat['nombre']) ?></option>
<?php endwhile; ?></select><br>
<input type='submit' value='Agregar Producto'>
</form>
</body></html>