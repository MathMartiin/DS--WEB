var capital = prompt("Digite o capital")
var taxa = prompt("Digite a taxa")
var tempo = prompt("Digite o tempo")

//verificando o tipo da variavel

var calculo = capital * ((taxa / 100)+1)**tempo;

var resultadoFinal = parseFloat(calculo.toFixed(2));


alert(calculo.toFixed(2));