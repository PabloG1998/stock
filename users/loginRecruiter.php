<?php 
include('../config/database.php');
include('../includes/navbar.php');
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
            <div class="card shadow border-success">
                <div class="card-body">
                    <h3 class="text-center text-success mb-3">Demo Portal</h3>
                    <p class="text-muted text-center small">Explora el sistema con credenciales de prueba.</p>
                    <form action="actions/auth_demo.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="test@test.com" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" value="test1234" class="form-control" readonly>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Ingresar como Reclutador</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php include('../includes/footer.php'); ?>