<?php
// Nome do servidor sendo normalmente o IP

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
// Exemplo de objeto e método(ação): $cchorro->latir()

// Seta algumas configurações específicas.
// Recebendo dados do formulário depois que o botão de enviar foi clicado
if(isset($_POST["mensagem"])){
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
}

var_dump ($email);

// Código necessário para pegar os dados que chegaram do formulário do front
// e armazenar no banco de dados. 
// Será necessário utilizar os métodos PREPARE e EXEC
$stmt = $pdo->prepare("INSERT INTO contatos_form (nome, email, mensagem)
                        VALUES (:nome, :email, :mensagem)");
$stmt->execute(ARRAY(
  ":nome" => $nome,
  "email" => $email,
  "mensagem" => $mensagem
));



?>