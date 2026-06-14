<?php
// Configuración de los parámetros de la base de datos
$host = 'localhost';
$user = 'root';     // Por defecto en XAMPP/WAMP
$pass = '';         // Por defecto en XAMPP/WAMP
$db   = 'stock_hogar';

// Crear la conexión usando MySQLi orientado a objetos
$conexion = new mysqli($host, $user, $pass, $db);

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    // Si falla, detenemos el script y mostramos el error
    die("Error de conexión: " . $conexion->connect_error);
}

// Asegurar que la conexión trabaje en UTF-8 para evitar problemas con tildes
$conexion->set_charset("utf8");

// Ya puedes usar $conexion en cualquier parte del sistema donde incluyas este archivo
?>