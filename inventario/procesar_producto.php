<?php
require_once __DIR__ . '/../config.php';
if (!empty($_POST['nombre'])) {
    $nombre = $conexion->real_escape_string(trim($_POST['nombre']));
    $descripcion = $conexion->real_escape_string(trim($_POST['descripcion'] ?? ''));
    $precio = floatval($_POST['precio']);
    $stock = intval($_POST['stock']);
    $stock_minimo = intval($_POST['stock_minimo']);
    $categoria = intval($_POST['categoria_id']);

    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock_actual, stock_minimo, categoria_id) VALUES ('{$nombre}', '{$descripcion}', {$precio}, {$stock}, {$stock_minimo}, {$categoria})";
    if ($conexion->query($sql)) header('Location: inventario.php'); else echo 'Error: '.$conexion->error;
}
?>