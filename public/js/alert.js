function showAlert() {
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Registro exitoso",
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