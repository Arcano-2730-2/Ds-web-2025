function calc(){
    let idade2 = Number(document.getElementById("idade").value);
    let resultado = document.getElementById("resultado");
    resultado.innerHTML = idade2 >= 18 ? "Maior de idade" : "Menor de idade";
}

function verificar(){
    let n1 = Number(document.getElementById("number").value);
    let veri = document.getElementById("veri");

    if (n1 > 0){
        veri.innerHTML = "O número é positivo";
    } else if (n1 < 0){
        veri.innerHTML = "O número é negativo";
    } else {
        veri.innerHTML = "O número é zero";
    }
}

function login(){
    let login = document.getElementById("user").value;
    let senha = document.getElementById("senha").value;
    let resultado = document.getElementById("login"); // Defina a variável resultado

    if (login == "admin" && senha == "1234"){
        resultado.innerHTML = "Login realizado com sucesso";}
    else{
        resultado.innerHTML= "Login ou senha incorretos";
    }
}

function calcular() {
    let numero1 = parseFloat(document.getElementById("num1").value);
    let numero2 = parseFloat(document.getElementById("num2").value);
    let operacao = document.getElementById("operacao").value;
    let resultado = document.getElementById("resul1");




    if (operacao === "somar") {
        resultado.innerHTML = numero1 + numero2;
    } 
    if (operacao === "subtrair") {
        resultado.innerHTML = numero1 - numero2;
    }
    if (operacao === "multiplicar") {
        resultado.innerHTML = numero1 * numero2;
    }
    if (operacao === "dividir") {
        if (numero2 !== 0) {
            resultado.innerHTML = (numero1 / numero2).toFixed(2);
        } else {
            resultado.innerHTML = "Erro: Divisão por zero!";
        }
    }
}

function parimp() {
    let number = document.getElementById("number1").value;
    let resultado = document.getElementById("resultado1");

    if (number % 2 == 0) {
        resultado.innerHTML = "O número é par";
    } else {
        resultado.innerHTML = "O número é ímpar";
    }
}

function maior() {
    let number1 = parseFloat(document.getElementById("x1").value);
    let number2 = parseFloat(document.getElementById("x2").value);
    let number3 = parseFloat(document.getElementById("x3").value);
    let resultado = document.getElementById("maior");

    if (number1 > number2 && number1 > number3) {
        resultado.innerHTML = "O maior número é " + number1;
    }
    if (number2 > number1 && number2 > number3) {
        resultado.innerHTML = "O maior número é " + number2;
    }
    if (number3 > number1 && number3 > number2) {
        resultado.innerHTML = "O maior número é " + number3;
    }
}

function triangulo(){
    let number1 = parseFloat(document.getElementById("l1").value);
    let number2 = parseFloat(document.getElementById("l2").value);
    let number3 = parseFloat(document.getElementById("l3").value);
    let resultado = document.getElementById("tri");


    if (number1 + number2 > number3 && number2 + number3 > number1 && number1 + number3 > number2){

        if (number1 === number2 && number2 === number3){
            resultado.innerHTML = "O triângulo é válido e é equilátero.";
        }
        else if (number1 === number2 || number2 === number3 || number1 === number3){
            resultado.innerHTML = "O triângulo é válido e é isósceles.";
        }
        else {
            resultado.innerHTML = "O triângulo é válido e é escaleno.";
        }
    } else {
        resultado.innerHTML = "O triângulo não é válido";
    }
}

    