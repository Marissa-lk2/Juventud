<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../../index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones Voluntariado</title>
    <link rel="stylesheet" href="../css/tabla.css">
    <link rel="icon" type="image/x-icon" href="../../public/assets/img/logocasa.png" />
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

<h1 class="titulo">INSCRIPCIONES VOLUNTARIADO</h1>

<form action="../controller/CrudVoluntariado/descargarExcel.php" method="GET">
    <button type="submit" class="btn excel-btn">Descargar datos en Excel</button>
</form>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Mensaje</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include '../config/conexion.php';

        $sql = "SELECT * FROM voluntarios";
        $resultado = $conexion->query($sql);

        while ($Fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($Fila['nombre']); ?></td>
                <td><?php echo htmlspecialchars($Fila['email']); ?></td>
                <td><?php echo htmlspecialchars($Fila['telefono']); ?></td>
                <td><?php echo htmlspecialchars($Fila['mensaje']); ?></td>
                <td><?php echo htmlspecialchars($Fila['fecha_registro']); ?></td>
            </tr>
        <?php } ?>
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
