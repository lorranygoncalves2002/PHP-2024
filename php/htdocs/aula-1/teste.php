<!--PHP é um pouco parecido com Javascript -->
<!--PHP roda/funciona apenas no servidor -->
<!-- Vamos usar o servidor "APACHE" paa rodar PHP -->
<!-- XAMPP: É um kit que reune uma stack/conjunto de ferramentas para trabalhar com back-end-->
<!-- Softwares que o XAMPP instala:
    Um servidor: APACHE
    Um banco de Dados: MySQL    
-->


<!--É necessário colocar todo código php dentro de "?php -->
<?php

// Definido variável em PHP
$cpf = "176.222.123-21";
$nomeCompleto = "Leticia Ferreira da Silva";
$nomedeUsuario = "Leticia9050";
$idadeUsuario = 98;

// Imprimindo valores na tela
echo $cpf;
echo "<br> {$nomeCompleto}";


// Condicionais:

if($idadeUsuario >=65){
    echo "<br> O usuário se encontra na terceira idade";
} else{
    echo "<br> O usuário não se encontra na terceira idade";
}

?>