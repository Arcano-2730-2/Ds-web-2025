let cap = parseFloat(prompt("Digite o valor do capital inicial:"));
let juros = parseFloat(prompt("Digite a taxa dos juros (%):")) / 100;
let tempo = parseFloat(prompt("Digite o tempo em meses:"));

let total = cap * (1 + juros) ** tempo; 
alert("O valor total após o tempo é: " + total.toFixed(2));
