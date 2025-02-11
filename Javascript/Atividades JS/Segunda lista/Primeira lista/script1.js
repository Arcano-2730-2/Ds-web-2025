function cadastrar() {
    var nome = document.getElementById("nome").value;
    document.getElementById("cadastrar").innerText ="Seja bem-vindo, " + nome;
}

function parimp() {
    var number = document.getElementById("number").value;
    if (number % 2 == 0) {
        document.getElementById("resultado1").innerHTML = "O número é par";
    } else {
        document.getElementById("resultado1").innerHTML ("O número é ímpar");
    }
}

function fixa(){
    var up = document.getElementById("frase").value;
    up = up.toUpperCase();
    document.getElementById("frase1").innerHTML = up;
}

function porc(){
    var num1 = parseFloat(document.getElementById("num1").value);
    var porc1 = parseFloat(document.getElementById("porc").value);

    var resultado = num1+(num1/100) * porc1;
    

    document.getElementById("resultado").innerText = "O resultado é: " + resultado;
}

function trocarCor() {
    var box = document.getElementById("box");
    if (box.style.backgroundColor === "aqua") {
        box.style.backgroundColor = "red";
    } else {
        box.style.backgroundColor = "aqua";
    }
}

