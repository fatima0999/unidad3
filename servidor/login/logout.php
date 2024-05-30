<?php
// Inicia una sesión en el servidor
session_start();

// Destruye la sesión actual y elimina todos los datos almacenados en ella
session_destroy();

// Redirige al usuario a la página index.php que se encuentra en la raíz del sitio web
header("location:../../index.php");
