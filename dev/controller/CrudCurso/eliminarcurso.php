<?php

include '../../config/conexion.php';

if (isset($_GET['id_curso'])) {
    $id_curso = intval($_GET['id_curso']);

    // Sentencia SQL para eliminar el curso
    $sql = "DELETE FROM cursos WHERE id_curso = $id_curso";

    if ($conexion->query($sql) === TRUE) {
        header('Location: ../../views/tablaCursos.php');

    } else {
        echo "Error al eliminar el curso: " . $conexion->error;
    }

    $conexion->close();
}



?>