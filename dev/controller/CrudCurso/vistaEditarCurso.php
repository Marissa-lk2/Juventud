<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/alert.js"></script>
    <link rel="stylesheet" href="../../css/contenidoAdmin.css">
    <link rel="stylesheet" href="../../css/tabla.css">
    <title>Actualizar Curso</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png" />
    <link rel="apple-touch-icon" type="image/png" href="../assets/img/logocasa.png" />
    <link
        rel="apple-touch-startup-image"
        type="image/png"
        href="../assets/img/logocasa.png"
    />
</head>
<body>

    <ul>
        <li style="float:right"><a class="active" href="../../views/tablaCursos.php"><img src="../../../public/assets/icons/exit.svg" alt=""></a></li>
    </ul>
    <br>
    <div class="form-container">
        <h3>Actualizar Curso</h3> 
        <?php
        include '../../config/conexion.php';

        // Enable error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $id_curso = $_REQUEST['id_curso'];

        $sql = "SELECT * FROM cursos WHERE id_curso ='$id_curso'";
        $resultado = $conexion->query($sql);

        if (!$resultado) {
            die("Query failed: " . $conexion->error);
        }

        $Fila = $resultado->fetch_assoc();
        ?>

        <form action="actualizarcurso.php?id_editar=<?php echo $Fila['id_curso']?>" method="POST" enctype="multipart/form-data" onsubmit="return showCourseAlert();">
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen">

            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" placeholder="Ingresa el Título" value="<?php echo $Fila['titulo']?>">

            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" placeholder="Ingresa la Descripción" value="<?php echo $Fila['descripcion']?>">
            
            <input type="submit" name="enviar" value="Actualizar Curso">
        </form>
    </div>

</body>
</html>
