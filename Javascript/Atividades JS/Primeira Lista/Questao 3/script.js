/*
// Exemplo de uso:
alert("Soma");
let num1 = parseFloat(prompt("Digite o primeiro número:"));
let num2 = parseFloat(prompt("Digite o segundo número:"));

function somar(a, b) {
    let soma = a + b;
    alert("A soma é: " + soma);
}
somar(num1, num2);


alert("Subtração");
let n1 = parseFloat(prompt("Digite o primeiro número:"));
let n2 = parseFloat(prompt("Digite o segundo número:"));

function sub(a, b) {
    let subt = a - b;
    alert("A subtração é: " + subt);
}
sub(n1, n2);
*/
alert("Divisão");
let nu1 = parseFloat(prompt("Digite o primeiro número:"));
let nu2 = parseFloat(prompt("Digite o segundo número:"));

function div(a, b) {
    if (b === 0) {
        alert("Não é possível dividir por zero");
    } else {
        let div = a / b;
        alert("O resultado da divisão é: " + div);
    }
}

div(nu1, nu2);


alert("Multiplicação");
let numb1 = parseFloat(prompt("Digite o primeiro número:"));
let numb2 = parseFloat(prompt("Digite o segundo número:"));

function mult(a, b) {
    let mult = a * b;
    alert("Da multiplicação é: " + mult);

}

mult(numb1, numb2);