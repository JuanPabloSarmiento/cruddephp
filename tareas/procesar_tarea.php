<?php
require_once __DIR__ . '/../config.php';
if (!empty($_POST['nueva_tarea'])) {
    $tarea = $conexion->real_escape_string(trim($_POST['nueva_tarea']));
    $sql = "INSERT INTO tareas (tarea) VALUES ('{$tarea}')";
    if ($conexion->query($sql) === TRUE) {
        header('Location: ver_tareas.php');
        exit;
    } else {
        echo 'Error: ' . $conexion->error;
    }
} else {
    echo 'No se recibió tarea.';
}
?>