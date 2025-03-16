<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];

// Opciones dinámicas por usuario
$acciones = [
    'Gladys' => ['Agregar', 'Eliminar', 'Filtrar'],
    'Pedro'  => ['Filtrar'],
    'Ana'    => ['Agregar', 'Filtrar']
];

// Acciones disponibles según el usuario
$opciones = $acciones[$username] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - <?= htmlspecialchars($username) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Hola, <?= htmlspecialchars($username) ?> 👋</h1>
        <p>Bienvenido al panel de control.</p>

        <?php if (in_array('Agregar', $opciones)): ?>
            <a href="agregar.php" class="btn btn-success mb-2">Agregar Información</a>
        <?php endif; ?>

        <?php if (in_array('Eliminar', $opciones)): ?>
            <a href="eliminar.php" class="btn btn-danger mb-2">Eliminar Información</a>
        <?php endif; ?>

        <?php if (in_array('Filtrar', $opciones)): ?>
            <a href="filtrar.php" class="btn btn-primary mb-2">Filtrar Información</a>
        <?php endif; ?>

        <a href="logout.php" class="btn btn-secondary">Cerrar Sesión</a>
    </div>
</body>
</html>
