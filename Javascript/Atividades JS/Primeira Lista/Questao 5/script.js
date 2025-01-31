function conver(f) {
    return (f - 32) * 5 / 9;
}

// Exemplo de uso:
let fahrenheit = parseFloat(prompt("Digite a temperatura em Fahrenheit:"));
let celsius = conver(fahrenheit);
alert(fahrenheit + "°F equivale a " + celsius.toFixed(2) + "°C");