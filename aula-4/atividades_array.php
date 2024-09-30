<?php
    // 1. Criação de Arrays Simples:
    // Enunciado: Crie um array em PHP com as seguintes frutas: abacaxi, abacate e amora. Em seguida exiba o elemento amora a partir de seu índice no array.
    // Dica: Os em PHP começam a partir do zero.
    $frutas = array("abacaxi", "abacate","amora");
    echo $frutas[2];
    echo "<br> -------------------------------- <br>";
    
    // 2. Criação de Arrays com valores que possuam tipos diferentes:
    // Enunciado: Crie um array em PHP que contenha pelo menos 5 elementos de tipos diferentes, como string, inteiro, ponto flutuante (float), e booleano. 
    // Depois, exiba cada elemento individualmente usando seus respectivos índices. Por fim, explique o que acontece se você tentar acessar um índice inexistente.
    // Dica: Utilize a função echo para exibir os valores do array e também a tag <br> para quebra de linha.
    $tiposDiferentes = array("elemento1", 5, 2.5,true, 14.99);
    echo "<br>" . $tiposDiferentes[0];
    echo "<br>" . $tiposDiferentes[1];
    echo "<br>" . $tiposDiferentes[2];
    echo "<br>" . $tiposDiferentes[3];
    echo "<br>" . $tiposDiferentes[4];
    echo "<br> -------------------------------- <br>";
    
    // 3. Criar um Array Associativo:
    // Enunciado: Crie um array associativo que armazene os nomes e idades de três pessoas, por exemplo, João, Maria e Ana. 
    // Depois, exiba a idade de uma pessoa específica, utilizando seu nome como chave do array. 
    // Após adicione uma nova pessoa ao array e exiba a lista completa de pessoas e idades.
    // Dica: Arrays associativos utilizam nomes como chave em vez de índices numéricos.
    $nomeIdade = array("Carina" => 72, "Priscila" => 25, "Lola" => 15);
    echo "<br>" . $nomeIdade["Carina"];
    echo "<br> -------------------------------- <br>";  

    // 4. Manipulação de Arrays:
    // Enunciado: Dado o array $numeros = array(10, 20, 30);, adicione o número 40 ao final do array utilizando a função array_push(). 
    // Em seguida, remova o número 20 do array utilizando a função unset(). 
    // Exiba o array antes e depois de cada operação. Como desafio, tente alterar o valor 30 para 50 e exiba o array final.
    // Dica: Lembre-se de que os índices mudam ao remover elementos.
    $numeros = array(10, 20, 30);
    array_push($numeros, 40);
    unset($numeros[20]);
    array_push($numeros, 50);
    unset($numeros[30]);
    echo "<br>" . $numeros[0];
    echo "<br>" . $numeros[3];
    echo "<br>" . $numeros[4];
    echo "<br> -------------------------------- <br>";
    
    
    // 5. Arrays Associativos:
    // Enunciado: Crie um array associativo que armazene os nomes e idades de três pessoas, por exemplo, João, Maria e Ana. 
    // Depois, exiba a idade de uma pessoa específica, utilizando seu nome como chave do array. Adicione uma nova pessoa ao array e exiba a lista completa de pessoas e idades.
    // Dica: Arrays associativos utilizam nomes como chave em vez de índices numéricos.
    $nomeIdade = array("Carina" => 72, "Priscila" => 25, "Lola" => 15);
    $nomeIdade["Paulinha"] = 22 ;
    echo "<br>" . $nomeIdade["Paulinha"];
    echo "<br>" . $nomeIdade["Carina"];
    echo "<br>" . $nomeIdade["Lola"];
    echo "<br>" . $nomeIdade["Priscila"];
    

    echo "<br> -------------------------------- <br>";  


    // 6. Arrays Multidimensionais
    // Enunciado: Crie um array multidimensional para representar uma lista de produtos de uma loja. Cada produto deve ter o nome,
    // o preço e a quantidade disponível. Exemplo: Camiseta custando 20 reais com 10 unidades em 		
    //estoque. Exiba as informações de um produto específico e, como desafio, adicione um novo produto e exiba a lista completa.
    // Dica: Arrays multidimensionais são arrays dentro de outros arrays. Acesse cada nível utilizando múltiplos índices ou chaves.
    $produtos = array(
        // array( "nomeProduto", preço, Qnt. Estoque);
        array("Camiseta", 30, 10),
        array("calça", 60, 15),
        array("Tenis", 50, 18),
    );
    // Array 0
    echo "<br>" . "Produto:" . $produtos[0][0];
    echo "<br>" . "Preço:" .$produtos[0][1];
    echo "<br>" . "Estoque:" .$produtos[0][2];
    // Array 1
    echo "<br> <br>" . "Produto:" . $produtos[1][0];
    echo "<br>" . "Preço:" .$produtos[1][1];
    echo "<br>" . "Estoque:" .$produtos[1][2];
    // Array 2
    echo "<br> <br>" . "Produto:" . $produtos[2][0];
    echo "<br>" . "Preço:" .$produtos[2][1];
    echo "<br>" . "Estoque:" .$produtos[2][2];
    echo "<br> -------------------------------- <br>"; 

    // 7. Funções com Arrays:
    // Enunciado: Utilize as funções count(), sort(), e array_merge() para realizar as seguintes tarefas:
    // Crie um array de números e utilize count() para contar quantos elementos ele possui.
    // Ordene o array de números em ordem crescente utilizando sort().
    // Crie dois arrays de nomes e mescle-os em um único array utilizando array_merge(). Exiba os resultados de cada operação.
    // Dica: A função print_r() pode ser útil para exibir a estrutura completa de um array.
    $numeros2 = array(0, 1, 2, 3, 4, 5, 77, 6, 7, 8, 9, 10);
    echo "<br>" . count($numeros2) . "<br>" ;
    sort($numeros2);
    print_r($numeros2 );

    $nome1 = array("lola", "priscila");
    $nome2 = array("Carina", "Paulinha");
    $nome = array_merge($nome1, $nome2);
    print_r($nome);

    // 8. Pesquisa em Arrays:
    // Enunciado: Crie um array de cores com os valores vermelho, azul, e verde. Utilize a função in_array()
    // para verificar se a cor azul está presente no array.
    // Depois, utilize a função array_search() para encontrar o índice (ou chave) da cor verde no array. 
    //Exiba as respostas no navegador.
    // Dica: A função in_array() retorna um valor booleano (true ou false), e a função array_search()
    //retorna o índice ou chave do valor.

    // $cores = array("vermelho", "azul", "verde");
    // in_array($azul,)

?>