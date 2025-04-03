function showSuccessAlertV() {
    Swal.fire({
        position: "center",
        icon: "success",  // Corregido "succes" por "success"
        title: "Ya eres parte del voluntariado!",
        showConfirmButton: false,
        timer: 1500
    });

    // Esperar 1.5 segundos antes de enviar el formulario
    setTimeout(function() {
        document.querySelector('.form-container').submit();
    }, 1500);

    // Prevenir el envío inmediato del formulario
    return false;
}

function showBadAlert() {
    Swal.fire({
        position: "center",
        icon: "error",
        title: "Error: Ya te has registrado como voluntario.",
        showConfirmButton: false,
        timer: 1500
    });

    // Esperar 1.5 segundos antes de enviar el formulario
    setTimeout(function() {
        document.querySelector('.form-container').submit();
    }, 1500);

    // Prevenir el envío inmediato del formulario
    return false;
}


function showCourseAlert() {
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Curso actualizado correctamente",
        showConfirmButton: false,
        timer: 1500
    });

    setTimeout(function() {
        document.querySelector('.form-container form').submit();
    }, 1500);

    return false;
}

function showSuccessAlert() {
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Imagen subida correctamente.",
        showConfirmButton: false,
        timer: 1500
    });

    // Esto retrasará el envío del formulario 1.5 segundos
    setTimeout(function() {
        // Enviar el formulario después de la alerta
        document.querySelector('form').submit();
    }, 1500);

    // Evitar el envío inmediato del formulario
    return false;
}
