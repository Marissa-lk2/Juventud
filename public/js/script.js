document.addEventListener("DOMContentLoaded", function () {
  renderFooter("contact-info");
  cargarEventosDelDia(new Date().toISOString().split("T")[0]);
  setupSlideControls();
  setupCardButtons();
  setupGSAPAnimations();
});

// Función modificada para el carrusel automático
function setupSlideControls() {
  let currentSlide = 0;
  const slidesContainer = document.querySelector(".slides");
  const slides = document.querySelectorAll(".slide");
  const phrases = document.querySelectorAll(".phrase");
  let autoSlideInterval;

  function changeSlide() {
    slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
    phrases.forEach((phrase, index) => {
      phrase.style.opacity = currentSlide === index ? 1 : 0;
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    changeSlide();
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    changeSlide();
  }

  function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 4000); // Cambio cada 4 segundos
  }

  // Eventos de navegación
  document.querySelector(".next").addEventListener("click", nextSlide);
  document.querySelector(".prev").addEventListener("click", prevSlide);

  // Control de auto-desplazamiento
  slidesContainer.addEventListener("mouseenter", () => clearInterval(autoSlideInterval));
  slidesContainer.addEventListener("mouseleave", startAutoSlide);

  // Iniciar
  changeSlide();
  startAutoSlide();
}

// Resto del código original...
document.addEventListener("DOMContentLoaded", setupSlideControls);

function openModal(title, cupos, descripcion) {
  document.getElementById("modal").style.display = "block";
  document.getElementById("modal-title").textContent = title;
  document.getElementById("cupos").textContent = cupos;
  document.getElementById("descripcion").textContent = descripcion;
}

function closeModal() {
  document.getElementById("modal").style.display = "none";
}

document.addEventListener("DOMContentLoaded", () => {
  let buttons = document.querySelectorAll(".cardBanner button");

  if (buttons.length === 0) {
    console.error("No se encontraron botones dentro de .cardBanner");
    return;
  }

  let urls = [
    "./public/html/calendario.html",
    "./public/views/voluntariado.php",
  ];

  buttons.forEach((button, index) => {
    button.addEventListener("click", () => {
      if (urls[index]) {
        window.location.href = urls[index];
      } else {
        console.warn(`No hay URL definida para el índice ${index}`);
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("id01").style.display = "none";
});

function setupGSAPAnimations() {
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".hero-title", {
    duration: 1,
    y: 50,
    opacity: 0,
    ease: "power2.out",
  });
  gsap.from(".hero-button", {
    duration: 1,
    y: 50,
    opacity: 0,
    delay: 0.5,
    ease: "power2.out",
  });
  gsap.from(".about", {
    scrollTrigger: { trigger: ".about", start: "top 80%" },
    y: 50,
    opacity: 0,
    duration: 1,
  });
  gsap.from(".project-gallery .project-item", {
    scrollTrigger: { trigger: ".projects", start: "top 80%" },
    scale: 0.8,
    opacity: 0,
    stagger: 0.2,
    duration: 1,
  });
}

// Código de login
var current = null;
document.querySelector("#email").addEventListener("focus", function (e) {
  if (current) current.pause();
  current = anime({
    targets: "path",
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: "easeOutQuart",
    },
    strokeDasharray: {
      value: "240 1386",
      duration: 700,
      easing: "easeOutQuart",
    },
  });
});

document.querySelector("#password").addEventListener("focus", function (e) {
  if (current) current.pause();
  current = anime({
    targets: "path",
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: "easeOutQuart",
    },
    strokeDasharray: {
      value: "240 1386",
      duration: 700,
      easing: "easeOutQuart",
    },
  });
});

document.querySelector("#submit").addEventListener("focus", function (e) {
  if (current) current.pause();
  current = anime({
    targets: "path",
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: "easeOutQuart",
    },
    strokeDasharray: {
      value: "530 1386",
      duration: 700,
      easing: "easeOutQuart",
    },
  });
});