<!doctype html> <!-- Declaración del tipo de documento HTML5 -->
<html lang="en"> <!-- Elemento raíz del documento HTML, que indica que el lenguaje del contenido es inglés -->

<head> <!-- Sección del documento que contiene metadatos y enlaces a recursos externos -->
  <!-- Metadatos necesarios -->
  <meta charset="utf-8"> <!-- Metadato que especifica la codificación de caracteres del documento (UTF-8) -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Metadato que controla la escala y el ancho de la pantalla en dispositivos móviles -->

  <!-- Enlace a la hoja de estilos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Enlace a una hoja de estilos personalizada para el login -->
  <link rel="stylesheet" href="public/css/login.css">

  <title>Login de usuario</title> <!-- Título del documento que se muestra en la pestaña del navegador -->
</head>

<body> <!-- Sección del documento que contiene el contenido visible -->
  <div class="container-fluid ps-md-0"> <!-- Contenedor fluido que ocupa todo el ancho de la pantalla -->
    <div class="row g-0"> <!-- Fila que contiene dos columnas -->
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div> <!-- Columna que ocupa 4 columnas en pantallas medianas y 6 columnas en pantallas grandes, con una imagen de fondo -->
      <div class="col-md-8 col-lg-6"> <!-- Columna que ocupa 8 columnas en pantallas medianas y 6 columnas en pantallas grandes -->
        <div class="login d-flex align-items-center py-5"> <!-- Contenedor que centra verticalmente el contenido y agrega un padding de 5 unidades -->
          <div class="container"> <!-- Contenedor que centra el contenido -->
            <div class="row"> <!-- Fila que contiene una columna -->
              <div class="col-md-9 col-lg-8 mx-auto"> <!-- Columna que ocupa 9 columnas en pantallas medianas y 8 columnas en pantallas grandes, centrada horizontalmente -->
                <h3 class="login-heading mb-4">Login de usuario</h3> <!-- Título de nivel 3 que muestra el texto "Login de usuario" -->

                <!-- Formulario de inicio de sesión -->
                <form action="servidor/login/logear.php" method="post"> <!-- Formulario que envía datos por POST a la URL "servidor/login/logear.php" -->
                  <div class="form-floating mb-3"> <!-- Contenedor que crea un campo de formulario flotante -->
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" autocomplete="off"> <!-- Campo de texto que solicita el usuario -->
                    <label for="usuario">Usuario</label> <!-- Etiqueta para el campo de texto -->
                  </div>
                  <div class="form-floating mb-3"> <!-- Contenedor que crea un campo de formulario flotante -->
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off"> <!-- Campo de contraseña que solicita la contraseña -->
                    <label for="password">Password</label> <!-- Etiqueta para el campo de contraseña -->
                  </div>
                  <div class="d-grid"> <!-- Contenedor que crea un botón de envío -->
                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Entrar</button> <!-- Botón de envío que dice "Entrar" -->
                    <div class="text-center"> <!-- Contenedor que centra horizontalmente el contenido -->
                      <button type="button" onclick="location.href='view/select.php'"> Mostrar </button> <!-- Botón que redirige a la página "view/select.php" -->
                      <a class="small" href="registro.php">Registrate aqui!</a> <!-- Enlace a la página de registro -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>