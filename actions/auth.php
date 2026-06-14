<?php
session_start();
require_once '../config/database.php';

// 1. Recolectar datos del POST (Si no existen, dejamos null)
$tipo_login = $_POST['tipo_login'] ?? '';
$email      = $_POST['email'] ?? null;
$password   = $_POST['password'] ?? null;

// 2. Lógica para Admin
if ($tipo_login === 'admin') {
    // Validamos que los campos no estén vacíos
    if (!$email || !$password) {
        header("Location: ../login.php?error=campos_vacios");
        exit();
    }

    // Consultamos usuario por email
    $stmt = $conexion->prepare("SELECT id, password FROM usuarios WHERE email = ? AND tipo = 'admin'");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    // Verificamos contraseña
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['tipo'] = 'admin';
        $_SESSION['user_id'] = $user['id'];
        
        // Redirige al Dashboard de gestión
        header("Location: ../dashboard.php?user=" . $user['id']);
        exit();
    } else {
        header("Location: ../login.php?error=credenciales_incorrectas");
        exit();
    }

// 3. Lógica para Recruiter/Demo
} elseif ($tipo_login === 'demo') {
    $_SESSION['rol'] = 'recruiter'; // O 'demo'
    // Los recruiters van directo a ver el catálogo, no a editar
    header("Location: ../index.php");
    exit();

} else {
    header("Location: ../login.php?error=acceso_invalido");
    exit();
}
?>