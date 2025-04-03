<?php
include '../../config/conexion.php';

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = null;

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['imagen']['tmp_name'];
    $imagen = addslashes(file_get_contents($tmp_name)); // Convertir imagen a formato binario
}

$sql = "INSERT INTO cursos (titulo, descripcion, imagen) VALUES ('$titulo', '$descripcion', '$imagen')";
$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: ../../views/tablaCursos.php');
} else {
    echo "Error al crear el Curso: " . $conexion->error;
}
?>
