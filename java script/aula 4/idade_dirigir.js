// 1- Você está em uma grandde empresa de segurança
// 2- Essa empresa tem um cuidado enorme na contratação
// 3- Dentro dessa empresa o RH necessita de um software interno
// 4- Esse software/programa interno vai conseguir pegar vários documentos/dados de candidatos
// 5- e filtrar pelas preferências das vagas.
// 6- A ideia do software interno e inicialmente fazer coisas simples
// 7- Como por exemplo filtrar um candidato por região ou ficha.
// 8- No futuro tem como objetivo utilizar I.A para auxiliar na seleção de candidatos.
// 9- Temos uma vaga de motorista particular e queremos que o software
// pelo menos consiga filtrar os 500 candidatos e trazer os que podem dirigir.

// 10- Os dois requisitos seriam:
// Idade maior ou igual a 18 anos.
// Ter carteira de motorista para carro.

// 11- Agora você fará o seguinte:
// Adicionar estado(RJ) do primeiroCandidato;
// Adicionar anos de experiência (colocar 5 anos);
// Adicionar IF e ELSE verificanndo se a pessoa tem anos de experiência igual ou maior que 5, assim exibir menssagem

var idadeDoPrimeiroCandidato = 19;
// True significa verdadeiro
var carteiraDeMotoristaDoPrimeiroCandidato = true;
var estadoDoPrimeiroCandidato = "RJ";
var anosDeExperienciaDoPrimeiroCandidato = 4;

if (idadeDoPrimeiroCandidato >= 18) {
  console.log("Você se encaixa no requisito de idade!");
} else {
  console.log("Você não se encaixa no requisito de idade!");
}

if (anosDeExperienciaDoPrimeiroCandidato >= 5) {
  console.log("Você tem experiência para a função!");
} else {
  console.log("Você não tem experiência para a função!");
}

if (estadoDoPrimeiroCandidato === "RJ") {
  console.log("Você mora local adequado para a vaga!");
} else {
  console.log("Você não mora no local adequado para a vaga!");
}
