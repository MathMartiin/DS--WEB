function descobrir(){
    var numero1  = document.getElementById("number").value;
    if(numero1 === ""){
        document.getElementById("result").innerText = "Digite um número";
    } else{
    var resultado = (numero1 % 2 === 0) ? `Número ${numero1} é PAR` : `Número ${numero1} é IMPAR`
    document.getElementById("result").innerText = resultado;
}
}