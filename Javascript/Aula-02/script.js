//TagName
var p1 = window.document.getElementsByTagName('p')[0];
document.getElementById("quarto-paragrafo").innerHTML = p1.innerText;
//ClassName
var classes = document.getElementsByClassName("exemplo");
classes[0].innerHTML = "Hello World!";
//ID
document.getElementById("teste").innerHTML = "Hello Wordl!"
//querySelector

document.querySelector("p#paragrafo").style.backgroundColor = "gray"

var paragrafo = document.querySelector("p").style;
paragrafo.backgroundColor = "purple";
paragrafo.color = "white"

function alertaDeClique(){
    alert("Você clicou no botão");
}

function calcular(){
    var numero1 = document.getElementById("numero1").value;
    var numero2 = document.getElementById("numero2").value;
    //Convertendo numeros
    console.log(typeof numero1)
    var numero1 = Number.parseInt(numero1)
    var numero2 = Number.parseInt(numero2)
    console.log(typeof numero1)

    var resultado = numero1 + numero2;

    document.getElementById("resultado").innerHTML = "resultado: " + resultado;

}
