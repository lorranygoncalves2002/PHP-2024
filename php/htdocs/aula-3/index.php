<?php
// Atividade 1: Faça um algoritmo que verifique se o estado da pessoa é "SP",
// assim exiba "O usuário é de SP" ou o contrário.

// Deixarei a variável já definida. agora é necessário criar a "condicional"
$estadoUsuario = "SP";

if($estadoUsuario === "SP"){
    echo "<br>O usuário é de SP!<br>";
} else{
    echo "<br>O usuário não é de SP! <br>";
}


// Atividade 2: O usuário quer fazer uma compra no valor de R$599,99 e sendo assim
// escreva um algoritmo que exiba "Compra efetuada com sucesso! ou o contrário.

// Deixarei a variável já definida. agora é necessário criar a "condicional"
$saldoUsuario = 600.00;
if($saldoUsuario >= 599.99){
    echo "Compra efetuada com sucesso!!  <br>";
} else{
    echo "Saldo insuficiente.<br>";
}

// Atividade 3: Faça um algoritmo que exiba os valores de 0 até 10 utilizando uma
// estrutura de repetição.
// Dica: Utilize For Loop

$valor = 0;

for ($valor=0; $valor <= 10 ; $valor++) { 
    echo "<br> Seu valor é:{$valor}";
}
?>