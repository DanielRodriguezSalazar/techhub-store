<?php
require_once 'config/Database.php';

$database = new Database();
$db = $database->getConnection();

$termino = isset($_GET['q']) ? $_GET['q'] : '';

$query = "SELECT * FROM productos WHERE nombre LIKE :busqueda OR descripcion LIKE :busqueda";
$stmt = $db->prepare($query);
$busqueda = "%{$termino}%";
$stmt->execute(['busqueda' => $busqueda]);

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">' . $row['nombre'] . '</h5>
                    <p class="card-text text-muted small">' . $row['descripcion'] . '</p>
                    <h4 class="text-primary mb-3">$' . number_format($row['precio'], 0, ',', '.') . '</h4>
                    <button class="btn btn-dark w-100">Agregar al Carrito</button>
                </div>
            </div>
        </div>';
    }
} else {
    echo '<div class="col-12 text-center"><p class="text-muted mt-5">No se encontraron productos para "' . htmlspecialchars($termino) . '"</p></div>';
}
?>
