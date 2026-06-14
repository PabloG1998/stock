<?php
require_once '../config/database.php';

$email = $_POST['email'];
$password = $_POST['password'];

// 1. Hashear la contraseña (esto es lo que hacen empresas como Google o Facebook)
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// 2. Insertar en la DB
$sql = "INSERT INTO usuarios (email, password, tipo) VALUES (?, ?, 'admin')";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $email, $password_hash);

if ($stmt->execute()) {
    header("Location: ../users/login.php?success=1");
} else {
    header("Location: ../users/register.php?error=db_error");
}
?>