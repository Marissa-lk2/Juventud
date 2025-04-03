<?php
include '../../config/conexion.php';

$id_curso = $_REQUEST['id_editar'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = null;

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['imagen']['tmp_name'];
    $imagen = addslashes(file_get_contents($tmp_name));
}

$sql = "UPDATE cursos SET titulo = '$titulo', descripcion = '$descripcion'";

if ($imagen !== null) {
    $sql .= ", imagen = '$imagen'";
}

$sql .= " WHERE id_curso = '$id_curso'";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: ../../views/tablaCursos.php');
} else {
    echo "Error al actualizar el Curso: " . $conexion->error;
}
?>
