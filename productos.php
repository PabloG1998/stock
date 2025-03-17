<?php 
// Datos de conexión a la base de datos
$host = 'localhost';
$dbname = 'stock';
$username = 'root';
$password = '';

// Conexión a la base de datos
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
    die();
}

// Procesar filtro de búsqueda
$filter = $_GET['filter'] ?? 'all';
$sql = 'SELECT * FROM categoria';

if ($filter === 'mercaderia') {
    $sql .= " WHERE categoria = 'mercaderia'";
} elseif ($filter === 'herramientas') {
    $sql .= " WHERE categoria = 'herramientas'";
}

$stmt = $pdo->query($sql);
?>

<!DOCTYPE html lang="es">
<head>
    <title>Productos - Stock Hogareño</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        <h1>Productos Filtrados</h1>
        <a href="index.php" class="btn btn-secondary mb-3">Volver</a>

        <?php
        if ($stmt->rowCount() > 0) {
            echo "<table class='table table-bordered'>";
            echo "<thead><tr><th>ID</th><th>Contenido</th><th>Categoría</th></tr></thead>";
            echo "<tbody>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . nl2br(htmlspecialchars($row['content'])) . "</td>";
                echo "<td>" . htmlspecialchars($row['category']) . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>No hay contenido disponible.</p>";
        }
        ?>
    </div>

</body>
</html>
