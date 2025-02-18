function calculo(){
    var lado1 = Number(document.getElementById("lado1").value);
    var lado2 = Number(document.getElementById("lado2").value);
    var lado3 = Number(document.getElementById("lado3").value);

    

    if((lado1 + lado2) > lado3 && (lado1 + lado3) > lado2 && (lado2 + lado3) > lado1){
       if(lado1 == lado2 && lado1 == lado3){
        document.getElementById("result").innerText = "triangulo é equilatero"
       }else if(lado1 == lado2 && lado1 != lado3){
        document.getElementById("result").innerText = "triangulo é isoceles"
       }else{
        document.getElementById("result").innerText = "triangulo é escaleno"
       }
    }else{
        document.getElementById("result").innerText = "triangulo é valido";
    }
}