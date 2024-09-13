<!--Atividade 1: A empresa JWC está criando um software para bancos que tem como objetivo
lidar com o processamento da lógica do "cliente do Banco"

Dessa forma é necessário criar um "back-end" que seja capaz deprocessar os dados dos usuários
analisando os dados inseridos e aplicando as regras de negócio.

Abaixo será passado os requisitos criados pela equipe de produto com os passos necessarios:
-->
<!-- 
    O formulário no front-end vai enviar esses dados importantes (idade, renda anual, estado)
 -->
 <?php 
    // Pegando os valores enviados pelo formulário no front e transformando em variáveis no "back-end"
    $idade=18;
    $rendaAnual= 80.000;
    $estado= "RJ";
    
    // Pesquise e crie  com php as seguintes regras de negócio.
    //se a $idade é maior ou igual a 18, caso seja exibir "permitir cliente" e caso não " não permitir cadastro".

     if($idade >= 18){
         echo "Permitir Cliente <br>";
     } else{
         echo "Não Permitir Cliente <br>";
     }
    
    // Atividade 2: Código que verifica se a rendaAnual é maior que 70.000, caso seja exibir "Cliente é VIP"
    // caso não exibir "Cliente Padrão".

    if($rendaAnual >=70.000){
        echo "Cliente VIP <br>";
    } else{
        echo "Cliente Padrão <br> ";
    }

    // Atividade 3: Calcular Limite do cartão de crédito permitido que é de 150% do Renda mensal(Renda anual dividido por 12)
    // exibindo o limite do usuário possivel

    $rendaMensal = $rendaAnual/12;
    $limite = $rendaMensal/100 *150;
    echo "Seu limite é de: {$limite} <br> ";

    // Atividade 4: Caso o usuário seja do "RJ" exibir uma menssagem que ele tem direito a uma promoção
    // que apenas clientes do estado do "RJ" vão poder ver.

    if($estado === "RJ"){
        echo "Você tem direito a uma promoção especial para moradores do Rio!";
    } 
 ?> 