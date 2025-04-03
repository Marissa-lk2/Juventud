<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explora nuestra galería de imágenes de la Casa de la Juventud.">

    <title>Galería | Casa de la Juventud</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/gallery.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100..1000&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png">
    <link rel="apple-touch-icon" href="../assets/img/logocasa.png">
</head>

<body>
    <!-- Navbar -->
    <div id="navbar-container"></div>

    <main>
        <section class="gallery">
            <h1 class="gallery-title">Galería</h1>
            <div class="gallery-images">
                <?php
                include "../../dev/config/conexion.php";

                $sql = "SELECT nombre, descripcion, imagen FROM imagenes";
                $resultado = $conexion->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        $nombre = htmlspecialchars($fila['nombre'] ?? 'Sin nombre');
                        $descripcion = htmlspecialchars($fila['descripcion'] ?? 'Sin descripción');

                        // Validar imagen y convertirla a base64
                        $imagenSrc = (!empty($fila['imagen'])) ? 'data:image/jpg;base64,' . base64_encode($fila['imagen']) : '../assets/img/default_image.jpg';

                        echo "<div class='image-card'>
                                <img src='{$imagenSrc}' alt='{$nombre}' onclick='openFullImg(this.src)'>
                                <div class='overlay'></div>
                                <div class='card-info'>
                                    <h3>{$nombre}</h3>
                                    <p>{$descripcion}</p>
                                </div>
                              </div>";
                    }
                } else {
                    echo "<p class='no-results'>No hay imágenes disponibles.</p>";
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Scripts al final para mejorar rendimiento -->
    <script src="../js/navbar.js"></script>
    <script src="../js/gallery.js"></script>

    <script src="../js/footer.js"></script>
</body>

</html>