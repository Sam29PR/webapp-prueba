<?php
$servername = "mysql-server-name.mysql.database.azure.com";
$username = "admin";
$password = "yourpassword";
$dbname = "yourdbname";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conectado con éxito a la base de datos";
?>
