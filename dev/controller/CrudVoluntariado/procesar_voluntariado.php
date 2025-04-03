<?php
// Conexión a la base de datos
include '../../config/conexion.php'; // Verifica que la ruta sea correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $email = isset($_POST['correo']) ? trim($_POST['correo']) : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

    // Validar que los campos no estén vacíos
    if (empty($nombre) || empty($email) || empty($telefono) || empty($mensaje)) {
        echo json_encode(["status" => "error", "message" => "Todos los campos son obligatorios."]);
        exit();
    }

    // Verificar si el correo ya está registrado
    $stmt = $conexion->prepare("SELECT id_voluntario FROM voluntarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "Ya estás registrado como voluntario."]);
        $stmt->close();
        exit();
    }
    $stmt->close();

    // Insertar en la base de datos
    $stmt = $conexion->prepare("INSERT INTO voluntarios (nombre, email, telefono, mensaje) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Registro exitoso."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error al registrar voluntario."]);
    }

    $stmt->close();
    $conexion->close();
} else {
    echo json_encode(["status" => "error", "message" => "Acceso denegado."]);
}
?>
