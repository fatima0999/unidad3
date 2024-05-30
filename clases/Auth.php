<?php
// Incluye el archivo de la clase Conexion
include "Conexion.php";

// Definición de la clase Auth que extiende de Conexion
class Auth extends Conexion
{
    // Método para registrar un nuevo usuario
    public function registrar($usuario, $password)
    {
        // Establece la conexión a la base de datos utilizando el método conectar de la clase padre
        $conexion = parent::conectar();

        // Prepara la consulta SQL para insertar un nuevo usuario en la tabla t_usuarios
        $sql = "INSERT INTO t_usuarios (usuario, password) 
                VALUES (?,?)";

        // Prepara la consulta SQL
        $query = $conexion->prepare($sql);

        // Asocia los parámetros de la consulta con los valores proporcionados
        $query->bind_param('ss', $usuario, $password);

        // Ejecuta la consulta y devuelve el resultado
        return $query->execute();
    }

    // Método para iniciar sesión de un usuario
    public function logear($usuario, $password)
    {
        // Establece la conexión a la base de datos utilizando el método conectar de la clase padre
        $conexion = parent::conectar();

        // Variable para almacenar la contraseña existente
        $passwordExistente = "";

        // Consulta SQL para obtener la información del usuario proporcionado
        $sql = "SELECT * FROM t_usuarios 
                WHERE usuario = '$usuario'";

        // Ejecuta la consulta SQL
        $respuesta = mysqli_query($conexion, $sql);

        // Verifica si se encontró algún usuario
        if (mysqli_num_rows($respuesta) > 0) {
            // Obtiene la contraseña almacenada en la base de datos
            $passwordExistente = mysqli_fetch_array($respuesta);
            $passwordExistente = $passwordExistente['password'];

            // Verifica si la contraseña proporcionada coincide con la almacenada en la base de datos
            if (password_verify($password, $passwordExistente)) {
                // Inicia sesión y almacena el nombre de usuario en la variable de sesión
                $_SESSION['usuario'] = $usuario;
                return true; // Retorna verdadero si la autenticación es exitosa
            } else {
                return false; // Retorna falso si la autenticación falla
            }
        } else {
            return false; // Retorna falso si no se encuentra ningún usuario con el nombre proporcionado
        }
    }
}
