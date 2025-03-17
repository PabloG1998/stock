<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];

// Opciones dinámicas por usuario
$acciones = [
    'Gladys' => ['Agregar', 'Eliminar', 'Filtrar', 'Listar'],
    'Pablo'  => ['Filtrar', 'Eliminar', 'Agregar', 'Listar', 'Ver Base de Datos'],  // Corregido "Elimina" a "Eliminar"
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
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap JS Bundle (con Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Brand</a>

            <ul class="navbar-nav d-flex flex-row ms-auto">
             
                        <li>
                            <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

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

        <?php if (in_array('Listar', $opciones)): ?>
            <a href="listar.php" class="btn btn-primary mb-2">Listar Información</a>
        <?php endif; ?>

        <?php if (in_array('Ver Base de Datos', $opciones)): ?>
            <a href="base.php" class="btn btn-primary mb-2">Ver base de datos</a>
        <?php endif; ?>
    </div>
</body>
</html>
