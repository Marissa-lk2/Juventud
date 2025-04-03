<?php
header('Content-Type: application/json');
include('../../config/conexion.php');

$fecha = $_GET['fecha'] ?? date('Y-m-d');

$query = "SELECT titulo, descripcion, hora FROM eventos WHERE fecha = '$fecha'";
$result = mysqli_query($conexion, $query);

$eventos = [];
while ($row = mysqli_fetch_assoc($result)) {
    $eventos[] = [
        'titulo' => $row['titulo'],
        'descripcion' => $row['descripcion'],
        'hora' => $row['hora']
    ];
}

echo json_encode($eventos);
?>
