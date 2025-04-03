<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntariado</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/voluntariado.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png" />
    <link rel="apple-touch-icon" type="image/png" href="../assets/img/logocasa.png" />
    <link rel="apple-touch-startup-image" type="image/png" href="../assets/img/logocasa.png" />
</head>
<body>
    <script src="../js/navbar.js"></script>
    <div id="navbar-container"></div>

    <header>
        <h1>Únete a Nuestro Programa de Voluntariado</h1>
        <p>Haz la diferencia en la comunidad y crece con nosotros.</p>
    </header>

    <div class="container">
        <section class="info">
            <div class="benefits">
                <h2>Beneficios</h2>
                <ul>
                    <li>Experiencia significativa en la comunidad</li>
                    <li>Conexión con personas con valores similares</li>
                    <li>Desarrollo de nuevas habilidades</li>
                </ul>
            </div>

            <div class="requirements">
                <h2>Requisitos</h2>
                <ul>
                    <li>Ser mayor de 16 años</li>
                    <li>Compromiso de al menos 5 horas semanales</li>
                    <li>Actitud positiva y ganas de ayudar</li>
                </ul>
            </div>
        </section>

        <section class="form-container">
    <h2>Formulario de Inscripción</h2>
    <form id="voluntariadoForm">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="telefono">Celular:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="correo">Email:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="mensaje">¿Por qué quieres pertenecer al voluntariado?</label>
        <textarea id="mensaje" name="mensaje" required></textarea>

        <button type="submit">Registrarse</button>
    </form>
    <div id="footer-container"></div>

<script src="./public/js/script.js"></script>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/alert.js"></script>

<script>
document.getElementById("voluntariadoForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita el envío normal del formulario

    let formData = new FormData(this);

    fetch("../../dev/controller/CrudVoluntariado/procesar_voluntariado.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            Swal.fire({
                position: "center",
                icon: "success",
                title: data.message,
                showConfirmButton: false,
                timer: 1500
            });

            setTimeout(() => {
                window.location.reload();
            }, 1500);
        } else {
            Swal.fire({
                position: "center",
                icon: "error",
                title: data.message,
                showConfirmButton: true
            });
        }
    })
    .catch(error => console.error("Error en la petición:", error));
});
</script>
