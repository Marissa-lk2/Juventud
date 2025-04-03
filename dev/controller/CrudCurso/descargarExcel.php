<?php
include '../../config/conexion.php'; // Ajusta la ruta si es necesario

// Verifica si se recibió el ID del curso
$id_curso = isset($_GET['id_curso']) ? intval($_GET['id_curso']) : 0;

// Validar si el curso existe
$sql_curso = "SELECT titulo FROM cursos WHERE id_curso = $id_curso";
$resultado_curso = $conexion->query($sql_curso);

if ($resultado_curso->num_rows == 0) {
    die("Error: El curso con ID $id_curso no existe.");
}

$curso = $resultado_curso->fetch_assoc();
$curso_nombre = $curso['titulo'];

// Configurar la descarga del archivo CSV con codificación UTF-16LE
header("Content-Type: text/csv; charset=UTF-16LE");
header("Content-Disposition: attachment; filename=inscripciones_$id_curso.csv");
header("Pragma: no-cache");
header("Expires: 0");

// Agregar BOM UTF-16LE para que Excel detecte bien la codificación
echo pack("v", 0xFEFF);

// Crear una función para formatear las filas correctamente
function convertir_utf16le($texto) {
    return mb_convert_encoding($texto, "UTF-16LE", "UTF-8");
}

// Escribir encabezados
echo convertir_utf16le("Nombre;Correo;Teléfono;Teléfono de Emergencia;Fecha de Nacimiento\n");

// Obtener los datos de los inscritos
$sql = "SELECT nombre, correo, telefono, telefono_e, fecha_nacimiento 
        FROM inscripcioncurso WHERE curso = $id_curso";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $linea = "{$fila['nombre']};{$fila['correo']};{$fila['telefono']};{$fila['telefono_e']};{$fila['fecha_nacimiento']}\n";
        echo convertir_utf16le($linea);
    }
} else {
    echo convertir_utf16le("No hay inscripciones;;;;\n");
}

exit();
?>
