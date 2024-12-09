<?php
$servername = "localhost";  // o la dirección del servidor de tu base de datos
$username = "root";         // tu usuario de MySQL
$password = "";             // tu contraseña de MySQL
$dbname = "tractocamioness";  // el nombre de la base de datos que estás usando

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>

