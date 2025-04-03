<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../../index.html ");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title> La casa de la juventud</title>
    <link rel="stylesheet" href="../css/barra.css">
    <link rel="stylesheet" href="../css/contenidoAdmin.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png" />
    <link rel="apple-touch-icon" type="image/png" href=".../../assets/img/logocasa.png" />
    <link
        rel="apple-touch-startup-image"
        type="image/png"
        href="../assets/img/logocasa.png"
    />
  </head>
</head>

<body>

<div class="sidebar">
    <div class="text-center mb-4">
        <span class="badge badge-dark">LA CASA DE LA JUVENTUD</span>
        <br><br>
        <h5>Administrador</h5>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#galeria" role="button" aria-expanded="false" aria-controls="galeriaMenu">Galería</a>
            <div class="collapse" id="galeria">
                <ul class="nav flex-column ml-3">
                    <li class="nav-item"><a class="nav-link" href="#crearimagen">Crear Imagen</a></li>
                    <li class="nav-item"><a class="nav-link" href="tablaGaleria.php">Ver Imagen</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#curso" role="button" aria-expanded="false" aria-controls="ordersMenu">Cursos</a>
            <div class="collapse" id="curso">
                <ul class="nav flex-column ml-3">
                    <li class="nav-item"><a class="nav-link" href="#crearcurso">Crear Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="tablaCursos.php">Ver Cursos</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#evento" role="button" aria-expanded="false" aria-controls="dashboardMenu">Eventos</a>
            <div class="collapse" id="evento">
                <ul class="nav flex-column ml-3">
                    <li class="nav-item"><a class="nav-link" href="#crearevento">Crear Evento</a></li>
                    <li class="nav-item"><a class="nav-link" href="tablaEvento.php">Ver Eventos</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#voluntariado" role="button" aria-expanded="false" aria-controls="voluntariadoMenu">Voluntariado</a>
            <div class="collapse" id="voluntariado">
                <ul class="nav flex-column ml-3">
                    <li class="nav-item"><a class="nav-link" href="tablaVoluntariado.php">Ver Voluntariados</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link salir" data-toggle="collapse" href="#masMenu" role="button" aria-expanded="false" aria-controls="masMenu">Salir</a>
            <div class="collapse" id="masMenu">
                <ul class="nav flex-column ml-3">
                    <li class="nav-item"><a class="nav-link" href="../controller/logout.php">Cerrar Sesión</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>

<!-- <div class="toggle-btn">
    <span class="open">&#9776;</span>
    <span class="close">&times;</span>
</div> -->


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
            $('.toggle-btn').click(function() {
                $('.sidebar').toggleClass('active');
                $('.toggle-btn').toggleClass('active');
            });
        });
    </script> -->

    <!-- BIENVENIDA -->

    <div class="container">
        <div class="grid-container">
            <div class="item1">
                <div class="centrar">
                    <h1>Hola Administrador</h1>
                    <p>Bienvenido, ¿Qué quieres crear el día de hoy?</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CREAR GALERIA -->
    <div class="container">
        <div class="grid-container">
            <div class="curso" id="crearimagen">
                <div class="centrar">
                    <div class="form-container">
                        <h3>Crear Galeria</h3>
                        <form action="../controller/CrudGaleria/agregarImagen.php" method="POST" enctype="multipart/form-data" onsubmit="return showSuccessAlert();">
                         <label for="imagen">Selecciona una imagen</label>
                        <input type="file" name="imagen" id="imagen" required><br>

                         <label for="nombre">Nombre</label>
                         <input type="text" name="nombre" id="nombre" placeholder="Ingresa el nombre" required><br>
                         
                         <label for="descripcion">Descripción</label>
                         <input type="text" name="descripcion" id="descripcion" placeholder="Ingresa la descripción" required><br>
                                                  <input type="submit" name="enviar" value="Enviar">
</form>

                        </form>
                    </div>
                </div>
            </div>
            <script>
   
</script>


            <div class="resultadoc">
                <div class="left">
                    <a class="button_slide slide_left" href="tablaGaleria.php">Galería de imágenes</a>
                </div>
            </div>
        </div>
    </div>

    <!--  CREAR CURSO -->
    <div class="container">
        <div class="grid-container">
            <div class="curso" id="crearcurso">
                <div class="centrar">
                    <div class="form-container">
                        <h3>Crear Curso</h3>
                        <form action="../controller/CrudCurso/crearcurso.php" method="POST" enctype="multipart/form-data">
                            <label for="imagen">Imagen</label>
                            <input type="file" id="imagen" name="imagen" required>

                            <label for="titulo">Titulo</label>
                            <input type="text" id="titulo" name="titulo" placeholder="Ingresa el Titulo" required>

                            <label for="descripcion">Descripcion</label>
                            <input type="text" id="descripcion" name="descripcion" placeholder="Ingresa la Descripcion" required>


                            <input type="submit" name="crearcurso" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>

            <div class="resultadoc">
                <div class="left">
                    <a class="button_slide slide_left" href="tablaCursos.php">Cursos Disponibles</a>
                </div>
            </div>
        </div>
    </div>



    <!--  CREAR EVENTOS-->
    <div class="container">
        <div class="grid-container">
            <div class="curso" id="crearevento">
                <div class="centrar">
                    <div class="form-container">
                        <h3>Crear Eventos</h3>
                        <form action="../controller/CrudEventos/crearevento.php" method="POST" >

                            <label for="titulo">Titulo</label>
                            <input type="text" id="titulo" name="titulo" placeholder="Ingresa el Titulo" required>

                            <label for="descripcion">Descripcion</label>
                            <input type="text" id="descripcion" name="descripcion" placeholder="Ingresa la Descripcion" required>

                            <label for="enlace">Fecha</label>
                            <input type="date" id="fecha" name="fecha" placeholder="Ingresa la fecha" required>

                            <label for="enlace">Hora</label>
                            <input type="time" id="hora" name="hora" placeholder="Ingresa la hora" required>

                            <input type="submit" name="enviar" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>

            <div class="resultadoc">
                <div class="left">
                    <a class="button_slide slide_left" href="tablaEvento.php">Eventos Disponibles</a>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/alert.js"></script>
</body>

</html>