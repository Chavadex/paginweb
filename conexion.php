<?php
$servername = "localhost";
$username = "root"; 
$password = "sacm1905"; //Si no es esta puede ser root o con mayuscula
$dbname = "prograweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>