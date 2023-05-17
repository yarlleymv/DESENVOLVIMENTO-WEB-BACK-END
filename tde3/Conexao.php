<?php
$servername = "localhost";  // nome do servidor
$username = "root";  // nome de usuário do banco de dados
$password = "";    // senha do banco de dados
$database = "gato_net";  // nome do banco de dados

// Estabelece a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
