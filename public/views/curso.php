<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explora nuestros cursos en la Casa de la Juventud y encuentra el adecuado para ti.">

    <title>Cursos | Casa de la Juventud</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/curso.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100..1000&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png">
    <link rel="apple-touch-icon" href="../assets/img/logocasa.png">
</head>

<body>
    <!-- Navbar -->
    <div id="navbar-container"></div>

    <main>
    <h1 class="page-title">Selecciona un curso</h1>

        <div class="grid">
            <?php
            // Conexión a la base de datos
            include "../../dev/config/conexion.php";

            // Consulta SQL
            $sql = "SELECT id_curso, imagen, titulo, descripcion FROM cursos";
            $result = $conexion->query($sql);

            if ($result->num_rows > 0) {
                while ($curso = $result->fetch_assoc()) {
                    $titulo = htmlspecialchars($curso['titulo'] ?? 'Título no disponible');
                    $descripcion = htmlspecialchars($curso['descripcion'] ?? 'Descripción no disponible');
                    $idCurso = htmlspecialchars($curso['id_curso'] ?? '');

                    // Validación y conversión de la imagen
                    $imagenSrc = (!empty($curso['imagen'])) ? 'data:image/jpg;base64,' . base64_encode($curso['imagen']) : '../assets/img/default_image.jpg';

                    echo "<div class='card'>
                            <img class='card__img' src='{$imagenSrc}' alt='Imagen del curso'>
                            <div class='card__content'>
                                <h2 class='card__header'>{$titulo}</h2>
                                <p class='card__text'>{$descripcion}</p>
                                <button onclick=\"openForm('{$idCurso}')\" class='card__btn'>Inscribirse <span>&rarr;</span></button>
                            </div>
                          </div>";
                }
            } else {
                echo "<p class='no-results'>No se encontraron cursos disponibles.</p>";
            }
            ?>
        </div>

        <!-- Modal de Inscripción -->
        <div id="id01" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-teal">
                    <span onclick="closeModal()" class="w3-button w3-large">&times;</span>
                    <h2>Formulario de Inscripción</h2>
                </header>
                <div class="w3-container">
                    <form action="../../dev/controller/CrudCurso/inscripcionCursos.php" method="POST" class="form-container" onsubmit="return showAlert();">
                        <input type="hidden" id="curso" name="curso">

                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="correo">Correo:</label>
                        <input type="email" id="correo" name="correo" required>

                        <label for="telefono">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" required>

                        <label for="telefono_e">Teléfono de Emergencia:</label>
                        <input type="text" id="telefono_e" name="telefono_e" required>

                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

                        <button type="submit" class="button_slide">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts al final para mejorar rendimiento -->
    <script src="../js/navbar.js"></script>
    <script src="../js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/alert.js"></script>
    <script src="../js/footer.js"></script>
</body>

</html>