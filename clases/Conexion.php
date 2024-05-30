<?php
// Definición de la clase Conexion
class Conexion
{
    // Variables para la conexión a la base de datos
    public $servidor = 'localhost'; // Dirección del servidor de la base de datos
    public $usuario = 'root'; // Nombre de usuario de la base de datos
    public $password = ''; // Contraseña de la base de datos
    public $database = 'usuariou5_fatima'; // Nombre de la base de datos
    public $port = 3306; // Puerto de la base de datos

    // Método para establecer la conexión a la base de datos
    public function conectar()
    {
        // Utiliza la función mysqli_connect para conectar a la base de datos
        // y retorna el resultado de la conexión
        return mysqli_connect(
            $this->servidor, // Parámetro: dirección del servidor
            $this->usuario, // Parámetro: nombre de usuario
            $this->password, // Parámetro: contraseña
            $this->database, // Parámetro: nombre de la base de datos
            $this->port // Parámetro: puerto de la base de datos
        );
    }
}
