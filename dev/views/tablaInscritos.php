<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../../index.html ");
    exit();
}

// Conexión a la base de datos
include '../config/conexion.php'; // Asegúrate de que esta ruta sea correcta

// Verifica si el id_curso está en la URL
$id_curso = isset($_GET['id_curso']) ? (int) $_GET['id_curso'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones</title>
    <link rel="stylesheet" href="../css/tabla.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png" />
    <link rel="apple-touch-icon" type="image/png" href="../../assets/img/logocasa.png" />
    <link
        rel="apple-touch-startup-image"
        type="image/png"
        href="../assets/img/logocasa.png"
    />
  </head>
</head>
<body>

<ul>
<li style="float:right"><a class="active" href="administrador.php"><svg fill="#000000" width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00024000000000000003" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.43200000000000005"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M17,11H5.41l2.3-2.29A1,1,0,1,0,6.29,7.29l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,13H17a1,1,0,0,0,0-2Zm4-7a1,1,0,0,0-1,1V19a1,1,0,0,0,2,0V5A1,1,0,0,0,21,4Z"></path>
                    </g>
                </svg></a></li>
</ul>

<h1 class="titulo">INSCRIPCIONES</h1>

<!-- Mostrar el ID del curso -->
<input type="hidden" name="id_curso" value="<?php echo $id_curso; ?>">

<form action="../controller/CrudCurso/descargarExcel.php" method="GET">
    <input type="hidden" name="id_curso" value="<?php echo $id_curso; ?>">
    <button type="submit" class="btn excel-btn">Descargar datos en Excel</button>
</form>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Teléfono de Emergencia</th>
                <th>Fecha de Nacimiento</th>
                <th>Curso</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($id_curso > 0 && isset($conexion)) {
                $stmt = $conexion->prepare("SELECT i.nombre, i.correo, i.telefono, i.telefono_e, i.fecha_nacimiento, c.titulo AS curso
                                            FROM inscripcioncurso i
                                            JOIN cursos c ON i.curso = c.id_curso
                                            WHERE i.curso = ?");
                $stmt->bind_param("i", $id_curso);
                $stmt->execute();
                $resultado = $stmt->get_result();

                while ($fila = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($fila['correo']); ?></td>
                        <td><?php echo htmlspecialchars($fila['telefono']); ?></td>
                        <td><?php echo htmlspecialchars($fila['telefono_e']); ?></td>
                        <td><?php echo htmlspecialchars($fila['fecha_nacimiento']); ?></td>
                        <td><?php echo htmlspecialchars($fila['curso']); ?></td>
                    </tr>
                <?php }
                $stmt->close();
            } else {
                echo "<tr><td colspan='6'>ID de curso inválido o conexión no establecida.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php 
if (isset($conexion)) {
    $conexion->close(); 
}
?>
</body>
</html>
