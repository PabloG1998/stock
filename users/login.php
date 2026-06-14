<?php 
include('../includes/navbar.php');
include('../config/database.php');

include('../includes/bootstrap.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow border-primary">
                <div class="card-body">
                    <h3 class="text-center text-primary mb-4">Inicio de Sesion</h3>
                    <form action="../actions/auth.php" method="POST">
                        <div class="mb-3">
                        	<input type="hidden" name="tipo_login" value="admin">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesion</button>
                        <p class="text-center">¿No tiene cuenta?</p>
                        <a class="btn btn-primary w-100" href="register.php"> ¡Registrese! </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php include('../includes/footer.php'); ?>