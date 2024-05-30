<?php
// Incluye el archivo de la clase Auth
include "../../clases/Auth.php";

// Obtiene el nombre de usuario y contraseña desde el formulario
$usuario = $_POST['usuario']; // Nombre de usuario enviado desde el formulario
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Contraseña hasheada enviada desde el formulario

// Crea una instancia de la clase Auth
$Auth = new Auth();

// Intenta registrar al usuario utilizando el método registrar de la clase Auth
if ($Auth->registrar($usuario, $password)) { // Si el registro es exitoso
    header("location:../../index.php"); // Redirige al usuario a la página de inicio
} else { // Si el registro falla
    echo "No se pudo registrar"; // Muestra un mensaje de error
}
