
function renderFooter(containerId) {
    const footer = document.createElement("footer");
    footer.innerHTML = `
        <div class="contact-info">
            <p><strong>Información:</strong></p>
            <p>Dirección: Calle 29, Via El Carmen-Santuario.</p>
            <p>Teléfono: +123 456 7890</p>
            <p>Email: juventud@alcaldiaelcarmen.gov.co</p>
        </div>
        <div class="social-media">
             <ul>
                <li><a href="https://www.facebook.com/share/1A53zoZx8F/">Facebook</a></li>
                <li><a href="https://twitter.com">Twitter</a></li>
                <li><a href="https://www.instagram.com/juventudelcarmen/">Instagram</a></li>
            </ul>
            <p>&copy; 2024 Casa de la Juventud. Todos los derechos reservados.</p>
        </div>
    `;
  
    const container = document.getElementById(containerId);
    
    if (container) {
      container.appendChild(footer);
    } else {
      console.warn(`No se encontró el contenedor con ID '${containerId}', agregando al body.`);
      document.body.appendChild(footer);
    }
  }
  
  
  document.addEventListener("DOMContentLoaded", function () {
    renderNavbar();
  });
