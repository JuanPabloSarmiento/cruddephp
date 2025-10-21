<?php
require_once __DIR__ . '/../config.php';
$id = intval($_GET['id'] ?? 0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    $sql = "UPDATE contactos SET nombre=?, telefono=?, email=? WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('sssi', $nombre, $telefono, $email, $id);
    if ($stmt->execute()) header('Location: ver_contactos.php');
    exit;
}
$contacto = $conexion->query("SELECT * FROM contactos WHERE id={$id}")->fetch_assoc();
?>
<!DOCTYPE html>
<html><head><meta charset='utf-8'><title>Editar</title></head><body>
<form method='POST'>
Nombre: <input name='nombre' value='<?= htmlspecialchars($contacto['nombre']) ?>'><br>
Teléfono: <input name='telefono' value='<?= htmlspecialchars($contacto['telefono']) ?>'><br>
Email: <input name='email' value='<?= htmlspecialchars($contacto['email']) ?>'><br>
<input type='submit' value='Actualizar'>
</form>
</body></html>