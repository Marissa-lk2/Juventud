<?php
include '../../config/conexion.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['nombre']) && !empty($_POST['descripcion'])) {
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $imagen = null;

        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES['imagen']['tmp_name'];
            $imagen = mysqli_real_escape_string($conexion, file_get_contents($tmp_name));
        }

        $sql = "INSERT INTO imagenes (nombre, descripcion";
        $values = "VALUES ('$nombre', '$descripcion'";

        if ($imagen !== null) {
            $sql .= ", imagen";
            $values .= ", '$imagen'";
        }

        $sql .= ") " . $values . ")";

        $resultado = $conexion->query($sql);

        if ($resultado) {
            header('Location: ../../views/tablaGaleria.php');
            exit;
        } else {
            echo "Error en la consulta: " . $conexion->error;
        }
    } else {
        echo "Error: Faltan datos.";
    }
}
?>
