<?php
include '../../config/conexion.php';

if (isset($_GET["id_evento"])) {
    $id_evento = intval($_GET['id_evento']);
    
    $sql = "DELETE FROM eventos WHERE id_evento = $id_evento";
    
    if ($conexion->query($sql) === TRUE) {
        header('Location: ../../views/tablaEvento.php');
    } else {
        echo "Error al eliminar el evento: " . $conexion->error;
    }

    $conexion->close();
}

?>

