<?php
// Configuración de la conexión a la base de datos
$servidor = 'localhost'; // Servidor de la base de datos
$usuario = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña de la base de datos
$database = 'login'; // Nombre de la base de datos
$port = 3306; // Puerto de la base de datos

// Crear una nueva conexión a la base de datos
$conn = new mysqli($servidor, $usuario, $password, $database, $port);

// Verificar si hay un error de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para seleccionar todos los usuarios
$sql = "SELECT usuario, nombre FROM usuario"; // Seleccionar también el campo "nombre"
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Usuario</th><th>Nombre</th></tr>"; // Cabecera de la tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["usuario"] . "</td><td>" . $row["nombre"] . "</td></tr>"; // Mostrar cada fila de la tabla
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión a la base de datos
$conn->close();
