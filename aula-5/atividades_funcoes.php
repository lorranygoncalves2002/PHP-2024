<?php
    // localhost:8012/aula-5/nome_do_arquivo_aqui.
    // O foco de hoje será funções PHP:
    // Funções significam: Blocos de Código Reutilizáveis.
    // Vamos fazer uma sequência de atividades criando funções em PHP.
    // Dica: É muito importante pesquisar na internet sobre como fazer isso, pois faz parte do trabalho do 
    // programador pesquisar possíveis soluções. No entanto, é fundamental sempre ler e entender minimamente 
    // o que está sendo escrito.
    
    // 1. Função para Somar Dois Números
    // Descrição: Crie uma função que receba dois números e retorne a soma deles.
    // Dica: Você vai precisar utilizar a palavra reservada "return" em algum momento no código.
    $numeroUm = 7;
    $numeroDois = 8;
    $resultado = soma($numeroUm, $numeroDois);
    function soma($numeroUm, $numeroDois){
        return $numeroUm + $numeroDois;
        
    }
    echo "A soma de $numeroUm e $numeroDois é: $resultado";

    // 2. Função para Reverter uma String
    // Descrição: Crie uma função que receba uma string e retorne a string revertida.
    // Dica: PHP tem um recurso que reverte strings nativamente na linguagem, pesquise e encontre ele.
    function reverterString($string) {
        return strrev($string);
    }
    
    $stringOriginal = "Qual foi menor";
    $stringReversa = reverterString($stringOriginal);
    
    echo "<br>String original: $stringOriginal\n";
    echo "<br>String reversa: $stringReversa\n";

    // 3. Função para Verificar se um Número é Par ou Ímpar.
    $num = 8;
    $result = parOuImpar($num);
    function parOuImpar($num){
        if($num%2 == 0){
            return "<br> O numero $num é par! ";
        } else{
            return "<br> O numero $num é ímpar! ";
        }
    }
    echo $result;


?>