<?php
include '../../config/conexion.php'; // Ajusta la ruta si es necesario

// Configurar la descarga del archivo CSV con codificación UTF-16LE
header("Content-Type: text/csv; charset=UTF-16LE");
header("Content-Disposition: attachment; filename=voluntarios.csv");
header("Pragma: no-cache");
header("Expires: 0");

// Agregar BOM UTF-16LE para que Excel detecte bien la codificación
echo pack("v", 0xFEFF);

// Crear una función para formatear las filas correctamente
function convertir_utf16le($texto) {
    return mb_convert_encoding($texto, "UTF-16LE", "UTF-8");
}

// Escribir encabezados
echo convertir_utf16le("Nombre;Correo;Teléfono;Mensaje;Fecha de Registro\n");

// Obtener los datos de los voluntarios
$sql = "SELECT nombre, email, telefono, mensaje, fecha_registro FROM voluntarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $linea = "{$fila['nombre']};{$fila['email']};{$fila['telefono']};{$fila['mensaje']};{$fila['fecha_registro']}\n";
        echo convertir_utf16le($linea);
    }
} else {
    echo convertir_utf16le("No hay voluntarios registrados;;;;\n");
}

exit();
?>
