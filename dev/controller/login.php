<?php
session_start();
include '../config/conexion.php';

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    if (empty($correo) || empty($contrasena)) {
        echo "Por favor, ingrese su correo y contraseña.";
        exit();
    }

    $stmt = $conexion->prepare("SELECT id_usuario, contrasena FROM usuario WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $fila = $resultado->fetch_assoc();
        
        if ($contrasena === $fila['contrasena']) {
            $_SESSION['id_usuario'] = $fila['id_usuario'];
            $_SESSION['correo'] = $correo;
            
            header("Location: ../../dev/views/administrador.php"); 

            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $stmt->close();
    $conexion->close();
}?>
