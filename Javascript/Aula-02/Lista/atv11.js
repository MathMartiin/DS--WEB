function calculo(){
    var numero1 = Number(document.getElementById("numero1").value);
    var numero2 = Number(document.getElementById("numero2").value);
    var numero3 = Number(document.getElementById("numero3").value);

    var maior = ""

    if(numero1 > numero2 && numero1 > numero3){
        maior = numero1;
    }else if(numero2 > numero1 && numero2 > numero3){
        maior = numero2; 
    }else{
        maior = numero3;
    }
    document.getElementById("result").innerText = "Maior número é " + maior;
}