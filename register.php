<?php
session_start();

// Datos de conexión
$host = 'localhost';
$dbname = 'stock';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
    die();
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['usuario'] ?? '');
    $pass = trim($_POST['password'] ?? '');

    if (empty($user) || empty($pass)) {
        $error = 'Por favor, completa todos los campos.';
    } else {
        // Verificar si el usuario ya existe
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
        $stmt->execute(['usuario' => $user]);

        if ($stmt->rowCount() > 0) {
            $error = 'El usuario ya existe. Elige otro nombre.';
        } else {
            // Hash de la contraseña por seguridad
            $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

            // Insertar nuevo usuario
            $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)");
            $stmt->execute(['usuario' => $user, 'password' => $hashedPass]);
            $success = '¡Registro exitoso! Ahora puedes iniciar sesión.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .register-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .logo {
            font-size: 80px;
            color: #0d6efd;
        }
    </style>
</head>
<body>

<div class="register-container text-center">
    <div class="logo mb-4">
        <i class="bi bi-building"></i>
    </div>
    <h2 class="mb-4">Registro de Usuario</h2>

    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
        <a href="login.php" class="btn btn-primary w-100 mt-2">Ir a Iniciar Sesión</a>
    <?php else: ?>
        <form method="POST" action="">
            <div class="mb-3">
                <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Registrarse</button>
        </form>
        <a href="login.php" class="btn btn-link mt-3">¿Ya tienes cuenta? Inicia sesión</a>
    <?php endif; ?>
</div>

</body>
</html>
