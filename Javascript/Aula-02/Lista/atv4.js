function calculo(){
    var p = document.getElementById("porcentagem"). value;
    var p = Number(p);
    var n = document.getElementById("numero"). value;
    var n = Number(n);
    var r = n + (n * p / 100)
    document.getElementById("result").innerHTML = r;
}

//var r = number(("porcentagem" + 100) / 100) * "numero";