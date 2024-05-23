<?php
// Database connection data
$servername = "https://wardify.app:2083/cpsess7415671945/3rdparty/phpMyAdmin/index.php?route=/database/structure&db=cwa99758_wardify"; // Server name
$username = "cwa99758"; // Database username
$password = "VvTZIrnIWwJwUMhArqYW"; // Database password
$dbname = "cwa99758_wardify"; // Database name

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 
echo "Conexión exitosa";

// Cerrar conexión
$conn->close();
?>
