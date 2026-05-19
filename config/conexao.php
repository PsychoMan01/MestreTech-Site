<?php
$host = "localhost";
$user = "mestretech";
$password = "mestretech123";
$dbname = "mestretech";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>