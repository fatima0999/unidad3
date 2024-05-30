<?php // Inicio del script de PHP

session_start(); // Inicia una sesión de PHP
include "../../clases/Auth.php"; // Incluye el archivo de clase Auth.php ubicado 3 niveles arriba en la carpeta clases

$usuario = $_POST['usuario']; // Asigna la variable $usuario el valor del campo 'usuario' enviado por POST
$password = $_POST['password']; // Asigna la variable $password el valor del campo 'password' enviado por POST

$Auth = new Auth(); // Crea una nueva instancia de la clase Auth

if ($Auth->logear($usuario, $password)) { // Llama al método logear de la clase Auth y verifica si el usuario y contraseña son válidos
    header("location:../../inicio.php"); // Redirige al usuario a la página inicio.php si las credenciales son válidas
} else {
    echo "No se pudo logear"; // Muestra el mensaje "No se pudo logear" si las credenciales son inválidas
}
