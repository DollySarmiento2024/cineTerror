<?php
$servername = "db";
$username = "fernanda";
$password = "fernanda";
$dbname = "cine";
// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>