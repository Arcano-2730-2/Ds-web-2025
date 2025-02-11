// Exibe a URL da página no console
//console.log(window.document.URL);

//Primeiro exemplo
// Selecionando o primeiro parágrafo e exibindo seu texto corretamente
var p1 = document.getElementsByTagName('p')[0];
document.getElementById("quarto-paragrafo").innerHTML = p1.innerText;

//Segundo parágrafo
// Alterando o conteúdo do ID "teste"
document.getElementById("teste").innerHTML = "Hello World";

//Terceiro exemplo
// Selecionando elementos pela classe e alterando o conteúdo do primeiro
var classes = document.getElementsByClassName("exemplo");
classes[0].innerHTML = "Hello World!";

//Quarto exemplo
// Selecionado apenas pela tag
document.querySelector("p").style.backgroundColor = "red";

// Selecionado pela TAG + ID
document.querySelector("#paragrafo").style.backgroundColor = "blue";

var paragrafo = document.querySelector("p").style;
paragrafo.backgroundColor = "red";
paragrafo.color = "white";


function alertadeclique(){
    alert("Você clicou no botão!");
}

function calcular(){
    

    var numero1 = parseFloat(document.getElementById("numero1").value);
    var numero2 = parseFloat(document.getElementById("numero2").value);

    var resultado = numero1 + numero2;

    document.getElementById("resultado").innerHTML = resultado;

    
    }