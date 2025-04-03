<?php

    include '../../config/conexion.php';

    if (isset($_REQUEST['ID'])) {
        $id = $_REQUEST['ID'];
    

    $sql = "DELETE FROM imagenes WHERE ID = '$id'";

    $resultado = $conexion -> query($sql);

    if($resultado) {
        header('Location: ../../views/tablaGaleria.php');
        exit;
    } else {
        echo "Error al eliminar la imagen". $conexion->error;
    }
    } 
?>