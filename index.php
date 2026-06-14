<?php 
include('config/database.php');
/*
TODO:
-Create dashboard.php
-Implements form add_product.php
-Implements form delete_product.php
-Implements form edit_product.php
-Recruiter View:
  -Refine index.php
  -Dynamic filters
-Security
 -Global Access Control
 -Responsive Design
 -Visual feedback
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Stock Hogareño</title>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">StockDB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>    
                <li class="nav-item"> 
                    <a class="nav-link" href="products/index.php">Productos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acciones
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="actions/viewFinishedProducts.php">Ver productos faltantes</a></li>
                        <li><a class="dropdown-item" href="actions/viewSales.php">Ver ofertas</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="users/login.php">Iniciar Sesion / Login</a>                	
                </li>
                <li  class="nav-item">
                	<a class="nav-link" href="users/loginRecruiter.php">Login Reclutadores</a>
                </ul>


            
            <!-- El buscador ahora vive ADENTRO del menú colapsable -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." name="search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>


<div class="container mt-4">
    <!-- Bienvenida -->
    <div class="row mb-4">
        <div class="col">
            <h2>¡Hola, Pablo!</h2>
            <p class="text-muted">Este es el estado actual de tu stock hoy.</p>
        </div>
    </div>

    <!-- 1. Tarjetas de Estado -->
    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="card bg-danger text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Agotados</h5>
                    <p class="card-text fs-2 fw-bold">5</p>
                    <a href="actions/viewFinishedProducts.php" class="text-white text-decoration-none sm-text">Ver lista &rarr;</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card bg-warning text-dark h-100">
                <div class="card-body">
                    <h5 class="card-title">Por Agotarse</h5>
                    <p class="card-text fs-2 fw-bold">3</p>
                    <a href="#" class="text-dark text-decoration-none sm-text">Revisar stock bajo &rarr;</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Productos</h5>
                    <p class="card-text fs-2 fw-bold">124</p>
                    <a href="products/index.php" class="text-white text-decoration-none sm-text">Ver despensa &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Tabla de Alertas Urgentes -->
    <div class="row">
        <div class="col-100">
            <div class="card mb-4">
                <div class="card-header bg-secondary text-white fw-bold">
                    ⚠️ Alertas de Reposición Urgente
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Categoría</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Leche Entera 1L</td>
                                    <td>Lácteos</td>
                                    <td><span class="badge bg-danger">Sin Stock</span></td>
                                    <td><button class="btn btn-sm btn-outline-primary">+1 Agregar</button></td>
                                </tr>
                                <tr>
                                    <td>Aceite de Girasol</td>
                                    <td>Almacén</td>
                                    <td><span class="badge bg-warning text-dark">Última unidad</span></td>
                                    <td><button class="btn btn-sm btn-outline-primary">+1 Agregar</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>




<?php include('includes/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>