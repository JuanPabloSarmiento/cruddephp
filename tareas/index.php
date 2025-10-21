<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html>
<head><meta charset='utf-8'><title>Lista de Tareas</title></head>
<body>
<h1>Agregar Nueva Tarea</h1>
<form method='POST' action='procesar_tarea.php'>
    <label>Tarea:</label><br>
    <input type='text' name='nueva_tarea' required><br><br>
    <input type='submit' value='Agregar Tarea'>
</form>
<br>
<a href='ver_tareas.php'>Ver tareas</a>
</body>
</html>