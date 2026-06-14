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
<div class="container-fluid mt-4">
    <div class="row">
       <aside class="col-md-3">
    <div class="list-group">
        <a href="index.php?categoria=Todos" class="list-group-item list-group-item-action">Todos</a>
        <a href="index.php?categoria=Lacteos" class="list-group-item list-group-item-action">Lácteos</a>
        <a href="index.php?categoria=Limpieza" class="list-group-item list-group-item-action">Limpieza</a>
    </div>
</aside>

        <main class="col-md-9">
            <div class="row" id="product-grid">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Leche Entera</h5>
                            <p class="card-text">Stock: 5</p>
                        </div>
                    </div>
                </div>
                </div>
        </main>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
</body>
</html>