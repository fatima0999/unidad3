<?php
// Inicia la sesión
session_start();

// Verifica si la sesión de usuario existe
if (!isset($_SESSION['usuario'])) {
  // Si no existe, redirige a la página de inicio
  header("location:index.php");
}
?>

<!-- Declaración del tipo de documento HTML5 -->
<!doctype html>
<html lang="en">

<head>
  <!-- Metadatos necesarios -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Enlace a la hoja de estilos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Iniciar sesión</title>
</head>

<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <!-- Logo de la aplicación -->
      <a class="navbar-brand" href="#">
        <img src="https://placeholder.pics/svg/150x50/888888/EEE/Logo" alt="..." height="36">
      </a>
      <!-- Botón para mostrar u ocultar la barra de navegación -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Contenedor de la barra de navegación -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Elementos de la barra de navegación -->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <!-- Elemento desplegable con el nombre de usuario -->
            <a style="color:red" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_SESSION['usuario']; ?>
            </a>
            <!-- Opciones del elemento desplegable -->
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="servidor/login/logout.php">Salir del sistema</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido de la página -->
  <div class="container">
    <h1 class="mt-4">Logo Nav by Start Bootstrap</h1>
    <p>El logo en la barra de navegación es ahora una característica predeterminada de Bootstrap en Bootstrap! Asegúrate de establecer la altura del logo dentro del HTML o utilizando CSS. Para obtener los mejores resultados, utiliza una imagen SVG como tu logo.</p>
  </div>

  <!-- Enlace a la hoja de estilos de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>