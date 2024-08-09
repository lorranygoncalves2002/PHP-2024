// Crie uma função que calcule o imposto de renda
// Será necessario o uso de condicionais (IF, ELSE)

function impostoDeRenda(rendimento) {
    //0%, 7,5%, 15%, 22,5%, 27,5%
    if ( rendimento <= 2559.20) {
        console.log("Você vai pagar 0% de imposto de renda!");
    } 
    else if(rendimento >= 2259.21 && rendimento <= 2826.65){
        console.log("Você vai pagar 7,5% de imposto de renda!");
    }
    else if(rendimento >= 2826.66 && rendimento <= 3751.05 ){
        console.log("Você vai pagar 15% de imposto de renda!");
    }
    else if(rendimento >= 3751.06 && rendimento <= 4664.68){
        console.log("Você vai pagar 22,5% de imposto de renda!");
    }
    else (rendimento <= 4664.69 )
        console.log("Você vai pagar 27,5% de imposto de renda!");
    }

impostoDeRenda(10000);
