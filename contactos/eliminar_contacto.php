<?php
require_once __DIR__ . '/../config.php';
$id = intval($_GET['id'] ?? 0);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['confirmar'] ?? '') === 'si') {
    $conexion->query("DELETE FROM contactos WHERE id={$id}");
    header('Location: ver_contactos.php');
    exit;
}
$c = $conexion->query("SELECT * FROM contactos WHERE id={$id}")->fetch_assoc();
?>
<!DOCTYPE html>
<html><head><meta charset='utf-8'><title>Eliminar</title></head><body>
<h2>¿Eliminar contacto?</h2>
<p><strong><?= htmlspecialchars($c['nombre']) ?></strong></p>
<form method='POST'><input type='hidden' name='confirmar' value='si'><input type='submit' value='Sí, eliminar'></form>
<a href='ver_contactos.php'>Cancelar</a>
</body></html>