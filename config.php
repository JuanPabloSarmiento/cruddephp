<?php
// Configuración básica para conectar a MySQL
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'mi_primera_bd';

$conexion = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
// For security in production, never keep credentials in plain files like this.
?>