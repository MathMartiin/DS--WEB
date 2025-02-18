function calculo(){
    var numero1 = document.getElementById("numero1").value;
    if(numero1 == 0){
        document.getElementById("result").innerText = "Igual a zero";
    }else if(numero1 < 0) {
        document.getElementById("result").innerText = "Seu número é negativo";
    }else if(numero1 > 0) {
        document.getElementById("result").innerText = "Seu número é positivo";
}
}