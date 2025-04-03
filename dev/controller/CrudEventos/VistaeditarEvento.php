<?php
include '../../config/conexion.php';

// Habilitar errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtener ID del evento de forma segura
if (!isset($_GET['id_evento']) || empty($_GET['id_evento'])) {
    die("Error: ID de evento no válido.");
}

$id_evento = (int) $_GET['id_evento']; // Convertir a entero

$query = "SELECT * FROM eventos WHERE id_evento = $id_evento";
$result = $conexion->query($query);

if (!$result) {
    die("Error en la consulta: " . $conexion->error);
}

$evento = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Evento</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../../css/contenidoAdmin.css">
    <link rel="stylesheet" href="../../css/tabla.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png" />
</head>
<body>
    <ul>
        <li style="float:right"><a class="active" href="../../views/tablaEvento.php">
            <img src="../../../public/assets/icons/exit.svg" alt="Salir"></a>
        </li>
    </ul>
    <br>

    <div class="form-container">
        <h3>Editar Evento</h3>
        <form action="actualizarevento.php" method="POST">
            <input type="hidden" name="id_evento" value="<?php echo $evento['id_evento']; ?>">
            
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo htmlspecialchars($evento['titulo']); ?>" required>

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" required><?php echo htmlspecialchars($evento['descripcion']); ?></textarea>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo $evento['fecha']; ?>" required>

            <label for="hora">Hora</label>
            <input type="time" id="hora" name="hora" value="<?php echo $evento['hora']; ?>" required>

            <input type="submit" name="actualizar" value="Actualizar Evento">
        </form>
    </div>
</body>
</html>
