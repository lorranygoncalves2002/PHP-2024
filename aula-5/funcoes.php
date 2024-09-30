<?php
    // Assunto de hoje funções PHP.
    // O que é uma função? É um bloco de código reutilizável.
    // Exibirei um exemplo de função abaixo:

    // Essa é uma função simples que exibe um nome;
    function exibirNome($nome){
        return $nome;
    }

    // Vamos executar essa função que criamos acima
    // Obs: Lembre de ativar o servidor Apache pelo Xampp
    // Para acessar: localhost:8012/nome-da-aula/nome-do-arquivo
    echo exibirNome("Rodrigo");

?>
