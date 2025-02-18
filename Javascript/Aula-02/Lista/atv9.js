function calculo(){
    var numero1 = document.getElementById("numero1").value;
    var numero1 = Number.parseFloat(numero1);
    var numero2 = document.getElementById("numero2").value;
    var numero2 = Number.parseFloat(numero2);

    const op = document.getElementById("operacao").value;
   
    var resultado = "";

    if(op == "+"){
        resultado = numero1 + numero2
    }
    else if(op == "-"){
        resultado = numero1 - numero2
    }
    else if(op == "*"){
        resultado = numero1 * numero2
    }
    else if(op == "/"){
        resultado = numero1 / numero2
        
    }
    document.getElementById("result").innerHTML = resultado;
}
