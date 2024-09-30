<?php
$servername = "localhost";
$username = "root"; // geralmente "root"
$password = ""; // deixe vazio se não tiver senha
$dbname = "ihm";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
