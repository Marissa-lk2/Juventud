<?php
include '../../config/conexion.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre']) && isset($_POST['correo']) &&
        isset($_POST['telefono']) && isset($_POST['telefono_e']) &&
        isset($_POST['fecha_nacimiento']) && isset($_POST['curso'])) {

        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $telefono_e = $_POST["telefono_e"];
        $fecha_nacimiento  = $_POST["fecha_nacimiento"];
        $curso = $_POST["curso"];

        $check_sql = "SELECT * FROM cursos WHERE id_curso = ?";
        $check_stmt = $conexion->prepare($check_sql);
        $check_stmt->bind_param("s", $curso);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            $sql = "INSERT INTO inscripcioncurso (nombre, correo, telefono, telefono_e, fecha_nacimiento, curso) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("ssssss", $nombre, $correo, $telefono, $telefono_e, $fecha_nacimiento, $curso);

            if ($stmt->execute()) {
                header('Location: ../../../public/views/curso.php');
            } else {
                echo "No se insertaron los datos: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error: El curso no existe.";
        }

        $check_stmt->close();
    } else {
        echo "Error: Faltan datos.";
    }
}

$conexion->close();
?>
