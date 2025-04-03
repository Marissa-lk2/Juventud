<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../../css/contenidoAdmin.css">
    <link rel="stylesheet" href="../../css/tabla.css">
    <title>Editar Imagen</title>
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
  <li style="float:right"><a class="active" href="../../views/tablaGaleria.php"><img src="../../../public/assets/icons/exit.svg" alt=""></a></li>
</ul>
<br>
<div class="form-container">

    <h3>Editar Imagen</h3> 
    <?php
    include '../../config/conexion.php';
    $ID = $_REQUEST['ID'];

    $sql = "SELECT * FROM imagenes WHERE ID ='$ID'";
    $resultado = $conexion->query($sql);

    $Fila = $resultado->fetch_assoc();

    ?>
    
    <form action="editarImagen.php?IDEditar=<?php echo $Fila['ID']?>" method="POST" enctype="multipart/form-data">
      
        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" name="imagen">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa el Nombre" value="<?php echo $Fila['nombre']?>">

        <label for="descripcion">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" placeholder="Ingresa la Descripción" value="<?php echo $Fila['descripcion']?>">

        <input type="submit" name="enviar" value="Enviar" id="enviar">
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../js/alert.js"></script>
</body>
</html>
