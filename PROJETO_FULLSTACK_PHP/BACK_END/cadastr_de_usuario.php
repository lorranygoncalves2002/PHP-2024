<?php
$servername = "localhost";
// Nome do usuário do banco de dados que quer conectar
$username = "root";
// Senha do usuário do banco de dados que quer conectar
$password = "";
// CNome do banco de dados
$dbname = "bd_back_php";
// Cria uma instância de conexão com o banco de dados
// usando os valores passados nos parâmetros(server, usuário e senha).
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if(isset($_POST['email']) && isset($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
}

// Código necessário para pegar os dados que chegaram do formulário
// do front e armazenar no banco de dados, 
//será necessário utilizar os métodos PREPARE e EXEC
$stmt = $pdo->prepare("INSERT INTO usuario (email, senha)
                        VALUES (:email, :senha)");
$stmt->execute(array(
    "email" => $email,
    "senha" => $senha
));

?>