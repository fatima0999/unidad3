<!doctype html>
<html lang="es">

<head>
  <!-- Meta etiquetas requeridas -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/registro.css"> <!-- Enlace al archivo CSS personalizado -->
  <title>Registro de usuario</title> <!-- Título de la página -->
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- ¡Imagen de fondo para la tarjeta definida en CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5> <!-- Título de la tarjeta -->
            <form action="servidor/registro/registrar.php" method="post"> <!-- Formulario de registro -->

              <!-- Campo para ingresar el nombre de usuario -->
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="usuario" name="usuario" autocomplete="off" placeholder="miusuario" required autofocus> <!-- Campo de entrada de texto para el nombre de usuario -->
                <label for="usuario">Usuario</label> <!-- Etiqueta del campo de usuario -->
              </div>

              <!-- Campo para ingresar la contraseña -->
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Contraseña" required> <!-- Campo de entrada de texto para la contraseña -->
                <label for="password">Contraseña</label> <!-- Etiqueta del campo de contraseña -->
              </div>

              <!-- Botón de registro -->
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button> <!-- Botón de envío del formulario -->
              </div>

              <!-- Enlace para iniciar sesión si ya tiene una cuenta -->
              <a class="d-block text-center mt-2 small" href="index.php">¡Si ya tienes una cuenta, entra!</a> <!-- Enlace para redirigir a la página de inicio de sesión -->

              <!-- Línea horizontal -->
              <hr class="my-4"> <!-- Línea divisoria -->

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> <!-- Inclusión del script de Bootstrap -->

</body>

</html>
