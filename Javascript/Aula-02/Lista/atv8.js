function entrada(){
    var perfil = document.getElementById("perfil").value;
    var senha = document.getElementById("senha").value;
    if(perfil === "admin" && senha === "12345"){
        document.getElementById("result").innerText = "Login bem sucedido!";
    }else{
        document.getElementById("result").innerText = "ERROR! login ou senha inválidos";
    }
}

