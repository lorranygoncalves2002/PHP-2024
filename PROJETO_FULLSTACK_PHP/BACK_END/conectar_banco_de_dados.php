<?php
// Nome do servidor sendo normalmente o IP
$servername = "localhost";
// Nome do usuário do banco de dados que quer conectar
$username = "root";
// Senha do usuário do banco de dados que quer conectar
$password = "";

// Cria uma instância de conexão com o banco de dados
// usando os valores passados nos parâmetros(server, usuário e senha).
$conn = new mysqli($servername, $username, $password);

// Condicional que checa se há algum erro na conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>