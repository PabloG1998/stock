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
                    <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                </li>    
                <li class="nav-item"> 
                    <a class="nav-link" href="../products/index.php">Productos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acciones
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../actions/viewFinishedProducts.php">Ver productos faltantes</a></li>
                        <li><a class="dropdown-item" href="../actions/viewSales.php">Ver ofertas</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="../users/login.php">Iniciar Sesion / Login</a>                	
                </li>
                <li  class="nav-item">
                	<a class="nav-link" href="../users/loginRecruiter.php">Login Reclutadores</a>
                </ul>


            
            <!-- El buscador ahora vive ADENTRO del menú colapsable -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." name="search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
