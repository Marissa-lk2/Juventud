// Asegúrate de que este código se ejecute cuando se cargue el documento
document.addEventListener("DOMContentLoaded", function() {
    // Oculta el modal inicialmente
    var modal = document.getElementById('id01');
    if (modal) {
      // Establecer display none con !important para asegurar que sobrescriba cualquier otro estilo
      modal.style.setProperty('display', 'none', 'important');
    }
  });
  
  // Función mejorada para abrir el modal
  function openForm(id_curso) {
    // Establece el ID del curso en el campo oculto
    document.getElementById('curso').value = id_curso;
    
    // Muestra el modal con display flex para centrarlo correctamente
    var modal = document.getElementById('id01');
    modal.style.setProperty('display', 'flex', 'important');
  }
  
  // Función para cerrar el modal
  function closeModal() {
    document.getElementById('id01').style.setProperty('display', 'none', 'important');
  }
  
  // Cierra el modal cuando se hace clic fuera del contenido del modal
  window.onclick = function(event) {
    var modal = document.getElementById('id01');
    if (event.target == modal) {
      modal.style.setProperty('display', 'none', 'important');
    }
  }