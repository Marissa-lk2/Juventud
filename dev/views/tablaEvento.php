<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../../index.html ");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Actividades</title>
    <link rel="stylesheet" href="../css/tabla.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png" />
    <link rel="apple-touch-icon" type="image/png" href="../assets/img/logocasa.png" />
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
<h1 class="titulo">CALENDARIO DE ACTIVIDADES</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../config/conexion.php';

            $query = "SELECT * FROM eventos ORDER BY fecha ASC, hora ASC";
            $result = $conexion->query($query);

            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['hora']; ?></td>
                    <td> 

                    <a href="../controller/CrudEventos/VistaeditarEvento.php?id_evento=<?php echo $row['id_evento']; ?>">
                            <button class="btn edit-btn"><img src="../../public/assets/icons/edit.svg" alt="Editar"></button>
                        </a>
                        <a href="../controller/CrudEventos/eliminarevento.php?id_evento=<?php  echo $row['id_evento']; ?>">
                            <button class="btn delete-btn"><img src="../../public/assets/icons/trash.svg" alt="Eliminar"></button>
                        </a>
                       
                </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
