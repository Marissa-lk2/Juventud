<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="https://rsms.me/inter/inter-ui.css">
  <link rel="stylesheet" href="../css/login.css">
</head>
<link rel="icon" type="image/x-icon" href="../assets/img/logocasa.png" />
    <link rel="apple-touch-icon" type="image/png" href="../assets/img/logocasa.png" />
    <link
        rel="apple-touch-startup-image"
        type="image/png"
        href="../assets/img/logocasa.png"
    />
  </head>

<body>
  <div class="page">
    <div class="container">
      <div class="left">
        <div class="login">Ingresar</div>
        <div class="eula">Desde este punto el acceso está restringido</div>
      </div>
      <div class="right">
        <svg viewBox="0 0 320 300">
          <defs>
            <linearGradient
              inkscape:collect="always"
              id="linearGradient"
              x1="13"
              y1="193.49992"
              x2="307"
              y2="193.49992"
              gradientUnits="userSpaceOnUse">
              <stop
                style="stop-color: #338ef7;"
                offset="0"
                id="stop876" />
              <stop
                style="stop-color: #edf28e;"
                offset="0.5"
                id="stop877" />
              <stop
                style="stop-color: #FFC0CB;"
                offset="1"
                id="stop878" />

            </linearGradient>
          </defs>
          <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
        </svg>
        <div class="form">
          <form action="../../dev/controller/login.php" method="POST">
            <label for="correo">Correo</label>
            <input type="mail" id="correo" name="correo" required>
            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" required>
            <input type="submit" id="submit" value="Iniciar Sesión">
          </form>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script src="../js/login.js"></script>
</body>

</html>