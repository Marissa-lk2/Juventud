<?php
include '../../config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['fecha']) && isset($_POST['hora'])) {
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];

        // Validar datos
        if (!empty($titulo) && !empty($descripcion) && !empty($fecha) && !empty($hora)) {
            $query = "INSERT INTO eventos (titulo, descripcion, fecha, hora) VALUES ('$titulo', '$descripcion', '$fecha', '$hora')";
            
            $resultado = $conexion->query($query);

            if ($resultado) {
                header('Location: ../../views/tablaEvento.php');
            } else {
                echo "No se pudo agregar el evento: " . $conexion->error;
            }
        } else {
            echo "Error: Todos los campos son obligatorios.";
        }
    } else {
        echo "Error: Faltan datos.";
    }
}
?>
