<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <title>Casa de la Juventud</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./public/css/index.css">

  <!--Favicon-->
  <link rel="icon" type="image/x-icon" href="public/assets/img/logocasa.png" />
  <link rel="apple-touch-icon" type="image/png" href="public/assets/img/logocasa.png" />
  <link
    rel="apple-touch-startup-image"
    type="image/png"
    href="public/assets/img/logocasa.png"
  />
</head>
<body>
    <!-- Barra de navegación -->
    <div class="navbar" id="navbar">
        <div class="logo-container">
            <a href="./public/views/login.php"> 
                <div class="logo">
                    <img src="public/assets/img/logocasa.png" alt="Logo Casa de la Juventud">
                </div>
            </a>
        </div>
        <div class="hamburger" id="hamburger"><img src="./public/assets/icons/menu.svg" alt=""></div>
        <div class="menu" id="menu">
            <a href="./index.html">Nuestra Historia</a>
            <a href="public/views/galeria.php">Galería</a>
            <a href="public/views/curso.php">Cursos</a>
            <a href="public/html/informacion.html">Información</a>
        </div>
    </div>
 

  <!-- Carrusel -->
  <section class="carousel">
    <div class="slides">
      <div class="slide">
        <img src="./public/assets/img/slider2.jpg" alt="Bienvenida a la Casa de la Juventud">
        <div class="phrase left">"Bienvenidos a la Casa de la Juventud"</div>
      </div>
      <div class="slide">
        <img src="./public/assets/img/slider1.jpg" alt="Espacio de crecimiento y aprendizaje">
        <div class="phrase right">"Un lugar para crecer y aprender juntos"</div>
      </div>
      <div class="slide">
        <img src="./public/assets/img/imacasa.jpg" alt="Actividades de desarrollo personal">
        <div class="phrase top">"Diversión y desarrollo personal"</div>
      </div>
    </div>
    <button class="nav-button prev">&#10094;</button>
    <button class="nav-button next">&#10095;</button>
  </section>
 <!-- Sección de Bienvenida -->
<section id="bienvenida">
  <div class="contenedor-bienvenida">
    <h1>Bienvenidos a la Casa de la Juventud</h1>
    <p>
      Un espacio dedicado al crecimiento, aprendizaje y desarrollo de los jóvenes.  
      Aquí podrás encontrar información sobre cursos, eventos y oportunidades para ti.  
      Nuestro objetivo es brindarte un ambiente enriquecedor donde puedas descubrir y  
      potenciar tus habilidades, conectar con otros jóvenes y participar en actividades  
      que fomenten tu bienestar y crecimiento personal.
    </p>
  </div>
</section>

  <!-- Sección de Servicios -->
  <div class="contenedor">
    <div class="cardBanner">
      <div class="icono">
        <i class="fa-solid fa-calendar-check"></i>
      </div>
      <h3>Calendario</h3>
      <p>
        Explora nuestra agenda de eventos y sé parte de las actividades preparadas para ti. ¡No te lo pierdas!
      </p>
      <button>Ver calendario</button>
    </div>
   
    <div class="cardBanner">
      <div class="icono">
        <i class="fa-solid fa-handshake-angle"></i>
      </div>
      <h3>Voluntariado</h3>
      <p>
        Sé parte de nuestros programas de voluntariado y contribuye al desarrollo de nuestra comunidad.
      </p>
      <button>Únete como voluntario</button>
    </div>  
  </div>
  
  <div class="mision-vision">
    <!-- Sección Misión -->
    <div class="mision">
        <img src="./public/assets/img/historia.jpg" alt="Misión">
        <div class="texto">
            <h2>Nuestra Misión</h2>
            <h3>Impulsando el futuro de los jóvenes</h3>
            <p>
                Promover el desarrollo integral de los jóvenes a través de
                actividades educativas, culturales y recreativas que fomenten su
                participación activa en la sociedad.
            </p>
        </div>
    </div>

    <!-- Sección Visión -->
    <div class="vision">
        <div class="texto">
            <h2>Nuestra Visión</h2>
            <h3>Inspirando el cambio</h3>
            <p>
                Ser un referente en la formación y empoderamiento de los jóvenes,
                contribuyendo a la construcción de una sociedad más justa y equitativa.
            </p>
        </div>
        <img src="./public/assets/img/objetivo.jpg" alt="Visión">
    </div>
</div>

  <div class="contenedorAc">
    <!-- Actividades Destacadas -->
    <section class="seccion-actividades">
      <h2>Nuestras Publicaciones</h2>
      <div class="seccion-actividades-grid">
        <!-- Post 1 -->
        <div class="card">
          <blockquote class="instagram-media" 
              data-instgrm-permalink="https://www.instagram.com/reel/DBuOz3Rygc3/?utm_source=ig_embed&amp;utm_campaign=loading" 
              data-instgrm-version="14" 
              style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:300px; min-width:400px; padding:0; width:100%;">
          </blockquote>
        </div>
        <div class="card">
        <blockquote class="instagram-media" 
            data-instgrm-permalink="https://www.instagram.com/reel/DBSKAzqy4JX/?utm_source=ig_embed&amp;utm_campaign=loading" 
            data-instgrm-version="14" 
            style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:300px; min-width:400px; padding:0; width:100%;">
        </blockquote>
        </div>
        <div class="card">
        <blockquote class="instagram-media" 
            data-instgrm-permalink="https://www.instagram.com/p/C-8OuXUvd_Q/?utm_source=ig_embed&amp;utm_campaign=loading" 
            data-instgrm-version="14" 
            style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:300px; min-width:400px; padding:0; width:100%;">
        </blockquote>
      </div>
      <div class="card">
        <blockquote class="instagram-media" 
            data-instgrm-permalink="https://www.instagram.com/p/C-84hUiye9F/""
            data-instgrm-version="14" 
            style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:300px; min-width:400px; padding:0; width:100%;">
        </blockquote>
      </div>
    
        <script async src="//www.instagram.com/embed.js"></script>
    </div>
    
  </div>
  
  <!-- Script de Instagram -->
  <script async src="https://www.instagram.com/embed.js"></script>

  <!-- Testimonios -->
  <section class="testimonios">
    <h2>Lo que dicen nuestros participantes</h2>
    <div class="testimonios-grid">
      <blockquote>
        <p>
          "La Casa de la Juventud me ayudó a descubrir mi pasión por la danza. Los talleres son increíbles."
        </p>
        <cite>- Ana Rodríguez</cite>
      </blockquote>
      <blockquote>
        <p>
          "Gracias al taller de boxeo, mejoré mi condición física y encontré una actividad que me encanta."
        </p>
        <cite>- Carlos Pérez</cite>
      </blockquote>
      <blockquote>
        <p>
          "La mixología fue una experiencia única. Aprendí mucho y lo recomiendo a todos."
        </p>
        <cite>- Sofía Gómez</cite>
      </blockquote>
      
      <blockquote>
      <p> "Gracias a la Casa de la Juventud, desarrollé mis habilidades en la música y ahora persigo mi sueño." </p>
       <cite>- Carlos Méndez</cite>
       <blockquote>
    </div>
  </section>
</main>

  <script src="./public/js/script.js"></script>
  <script src="./public/js/footer.js"></script>
  
  <div id="footer-container"></div>
  <script>
      window.addEventListener("scroll", function () {
      var navbar = document.getElementById("navbar");
      if (window.scrollY > 50) {
          navbar.classList.add("scrolled");
      } else {
          navbar.classList.remove("scrolled");
      }
  });

      // Evento para el menú hamburguesa
  const hamburger = document.getElementById("hamburger");
  const menu = document.getElementById("menu");
  
  // Abrir / Cerrar el menú hamburguesa
  hamburger.addEventListener("click", function () {
    menu.classList.toggle("active");
  });
  
  // Cerrar menú al hacer clic en un enlace
  document.querySelectorAll(".menu a").forEach(link => {
    link.addEventListener("click", () => {
      menu.classList.remove("active");
    });
  });
  
  </script>
</body>
</html>
