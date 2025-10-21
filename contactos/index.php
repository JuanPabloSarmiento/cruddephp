<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html>
<head><meta charset='utf-8'><title>Agenda de Contactos</title></head>
<body>
<h1>Agregar Nuevo Contacto</h1>
<form method='POST' action='guardar_contacto.php'>
 Name:<br><input type='text' name='nombre' required><br>
 Teléfono:<br><input type='tel' name='telefono'><br>
 Email:<br><input type='email' name='email'><br>
 <br><input type='submit' value='Guardar Contacto'>
</form>
<br><a href='ver_contactos.php'>Ver Todos los Contactos</a>
</body>
</html>