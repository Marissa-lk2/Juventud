document.addEventListener("DOMContentLoaded", function () {
  renderNavbar();
  renderFooter("contact-info");
});

function renderNavbar() {
  const navbarContainer = document.getElementById("navbar-container");
  if (!navbarContainer) {
    console.error("No se encontró #navbar-container");
    return;
  }

  navbarContainer.innerHTML = `
    <div class="navbar" id="navbar">
      <div class="logo-container">
        <a href="../../index.html">
          <div class="logo">
            <img src="../assets/img/logocasa.png" alt="Logo Casa de la Juventud">
          </div>
        </a>
      </div>
      <div class="hamburger" id="hamburger">
        <img src="../assets/icons/menu.svg" alt="Menú">
      </div>
      <div class="menu" id="menu">
        <a href="../../index.html">Nuestra Historia</a>
        <a href="../views/galeria.php">Galería</a>
        <a href="../views/curso.php">Cursos</a>
        <a href="../html/informacion.html">Información</a>
      </div>
    </div>
  `;

  // Evento para el scroll
  window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (navbar) {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
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
  
}




