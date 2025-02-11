function calc(){
    var idade2 = Number(document.getElementById("idade").value);
    var resultado = document.getElementById("resultado");
    resultado.innerHTML = idade2 >= 18 ? "Maior de idade" : "Menor de idade";
}