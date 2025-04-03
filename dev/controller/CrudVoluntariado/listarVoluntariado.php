<?php
include '../../config/conexion.php';

$sql = "SELECT * FROM voluntariado ORDER BY fecha_registro DESC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../../css/contenidoAdmin.css">
    <link rel="stylesheet" href="../../css/tabla.css">
    <title>Lista de Voluntarios</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png" />
</head>
<body>

<ul>
    <li style="float:right"><a class="active" href="../../views/dashboard.php">
        <img src="../../../public/assets/icons/exit.svg" alt="Salir">
    </a></li>
</ul>

<br>

<div class="form-container">
    <h3>Lista de Voluntarios</h3>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Mensaje</th>
                <th>Fecha Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $fila['id_voluntario']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['email']; ?></td>
                    <td><?php echo $fila['telefono']; ?></td>
                    <td><?php echo $fila['mensaje']; ?></td>
                    <td><?php echo $fila['fecha_registro']; ?></td>
                    <td>
                        <a href="editarVoluntario.php?id=<?php echo $fila['id_voluntario']; ?>">Editar</a> |
                        <a href="eliminarVoluntario.php?id=<?php echo $fila['id_voluntario']; ?>" onclick="return confirm('¿Seguro que quieres eliminar?');">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
