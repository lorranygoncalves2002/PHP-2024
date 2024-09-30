<?php
// localhost:8012/aula-4/arrays.php
// Aula de hoje será sobree "ARRAYS"
//Ha três categorias conhecidas de arrays no PHP

// Arrays Indexado -> O valor vai possuir um indice com sua localização.
$frutas = array("laranja","banana","maça");
// Exibe o primeiro elemento "Laranja" que está no indice 0
echo $frutas[0];

// Array Aassociativo -> Você passa um valor qualquer como indice 
// você acessa pelo "apelido" que você deu.
$idades = array("Pedro" => 25, "Letícia" => 33);
echo $idades["pedro"];

// Array Multidimensional -> Arrays Dentro de Arrays que podem formar 
// múltiplas dimensões, você pode criar quantas dimensões você quiser.
// Ex: Tabela Exel com coluna e linha, jogo da Velha,
// Tabuleiro de xadrez, Ambiente 3D(X,Y,Z).
$jogoDaVelha = array(
    array("X", "O", "X"),
    array("O", "X", "O"),
    array("X", "X", "O"),
);

echo $jogoDaVelha[0][1];

?>