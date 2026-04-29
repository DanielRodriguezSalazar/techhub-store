<?php
require_once 'config/Database.php';
require_once 'models/Producto.php';

// Iniciamos la conexión
$database = new Database();
$db = $database->getConnection();

// Traemos los productos iniciales
$producto = new Producto($db);
$stmt = $producto->leer();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechHub Store - Daniel Rodríguez y Jonathan Alegría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card { transition: transform 0.3s; }
        .card:hover { transform: scale(1.05); }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">TechHub Store</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mb-4">Catálogo Tecnológico</h1>

        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-white">🔍</span>
                    <input type="text" id="buscador" class="form-control" placeholder="Buscar por nombre (ej: Laptop, Mouse...)">
                </div>
                <small class="text-muted text-center d-block mt-2">Búsqueda instantánea con AJAX</small>
            </div>
        </div>

        <div class="row" id="contenedor-productos">
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                            <p class="card-text text-muted small"><?php echo $row['descripcion']; ?></p>
                            <h4 class="text-primary mb-3">$<?php echo number_format($row['precio'], 0, ',', '.'); ?></h4>
                            <button class="btn btn-dark w-100">Agregar al Carrito</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script>
    document.getElementById('buscador').addEventListener('keyup', function() {
        let busqueda = this.value;
        
        // Llamamos al archivo buscar.php sin recargar la página
        fetch('buscar.php?q=' + busqueda)
            .then(response => response.text())
            .then(data => {
                // Reemplazamos solo el contenido de los productos
                document.getElementById('contenedor-productos').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    });
    </script>

</body>
</html>