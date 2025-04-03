<?php
include '../../config/conexion.php';

$query = "SELECT id_curso, titulo FROM cursos";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    while ($Fila = $resultado->fetch_assoc()) {
        echo "<p>Curso: " . $Fila['titulo'] . " (ID: " . $Fila['id_curso'] . ")</p>";

        // Formulario para descargar Excel
        echo '<form action="../controller/CrudCurso/descargarExcel.php" method="GET">';
        echo '<input type="hidden" name="id_curso" value="' . $Fila['id_curso'] . '">';
        echo '<button type="submit" class="btn excel-btn">Descargar datos en Excel</button>';
        echo '</form>';
    }
} else {
    echo "No hay cursos disponibles.";
}
?>
