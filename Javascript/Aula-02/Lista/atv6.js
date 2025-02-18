function calculo(){
    var idade = document.getElementById("idade").value;
    if(idade >= 18){
        document.getElementById("result").innerText = "Você é de maior";
    }else{
        document.getElementById("result").innerText = "Você é de menor";
    }
}