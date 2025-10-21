<?php
require_once __DIR__ . '/../config.php';
if (!empty($_POST['nombre'])) {
    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono'] ?? '');
    $email = trim($_POST['email'] ?? '');

    $stmt = $conexion->prepare("INSERT INTO contactos (nombre, telefono, email) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $nombre, $telefono, $email);
    if ($stmt->execute()) {
        header('Location: ver_contactos.php');
        exit;
    } else {
        echo 'Error: ' . $conexion->error;
    }
    $stmt->close();
} else {
    echo 'Nombre requerido.';
}
?>