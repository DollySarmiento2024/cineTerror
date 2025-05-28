<?php
$servername = "db"; //PMA_HOST  en compose.yml
$username = "fernanda"; //MYSQL_USER en Dockerfile
$password = "fernanda"; //MYSQL_PASWORD en Dockerfile
$dbname = "cine";
// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>