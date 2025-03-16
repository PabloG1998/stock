<!DOCTYPE html lang="es">
<head>
    <title>Stock Hogareño</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Stock Hogareño</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./login.php">Iniciar Sesion</a></li>
                        <li><a class="dropdown-item" href="./register.php">Registrarse</a></li>
                        <li><a class="dropdown-item" href="./stock.php">Stock</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./productos.php">Productos</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Formulario que redirige a productos.php -->
            <form class="d-flex" role="search" method="GET" action="productos.php">
                <select name="filter" class="form-select me-2">
                    <option value="all">Todo</option>
                    <option value="mercaderia">Mercadería</option>
                    <option value="herramientas">Herramientas</option>
                </select>
                <button class="btn btn-outline-success" type="submit">Filtrar</button>
            </form>

        </div>
    </div>
</nav>

</body>
</html>
