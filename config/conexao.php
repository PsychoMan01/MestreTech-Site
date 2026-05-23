<?php
$host = "localhost";
$user = "root";
$password = "mysql";
$dbname = "mestretech_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>