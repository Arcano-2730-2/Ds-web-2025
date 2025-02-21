function criar() {
    let titulo = document.getElementById("titulo").value;
    let descricao = document.getElementById("desc").value;
    let cor = document.getElementById("cor").value;
    let box = document.getElementById("box");

    // Criar a div do cartão
    let cartao = document.createElement("div");
    cartao.setAttribute("style", "padding: 15px; margin: 10px; border-radius: 50px; width: 250px; text-align: center; font-family: Arial, sans-serif; color: white;");
    

    //Seletor das cores
    let cores = {
        vermelho: "red",
        azul: "blue",
        amarelo: "yellow",
        verde: "green"
    };
    cartao.style.backgroundColor = cores[cor];

    //Criação dos elemtentos da div
    let h3 = document.createElement("h3");
    h3.innerText = titulo;

    let p = document.createElement("p");
    p.innerText = descricao;


    //Botão de excluir e sua estilização
    let botaodel = document.createElement("button");
    botaodel.innerText = "Excluir";


    botaodel.style.backgroundColor = "crimson";
    botaodel.style.color = "white";
    botaodel.style.border = "none";
    botaodel.style.padding = "10px 20px";
    botaodel.style.borderRadius = "20px";
    botaodel.style.fontSize = "14px";
    botaodel.style.cursor = "pointer";
    botaodel.style.transition = "background-color 0.3s ease, transform 0.2s ease";
    botaodel.style.boxShadow = "0px 4px 6px rgba(0, 0, 0, 0.2)";


    botaodel.onmouseover = function () {
        botaodel.style.backgroundColor = "darkred";
        botaodel.style.transform = "scale(1.1)";
    };


    botaodel.onmouseout = function () {
        botaodel.style.backgroundColor = "crimson";
        botaodel.style.transform = "scale(1)";
    };


    botaodel.onclick = function () {
        cartao.remove();
    };

    //Adicionando os elementos ao cartão
    cartao.appendChild(h3);
    cartao.appendChild(p);
    cartao.appendChild(botaodel);
    box.appendChild(cartao);

    document.getElementById("titulo").value = "";
    document.getElementById("desc").value = "";



    

}


//Estilização dos elementos do codigo
let box = document.getElementById("box");
box.style.display = "flex";
box.style.flexWrap = "wrap";
box.style.justifyContent = "center";
box.style.gap = "15px";
box.style.marginTop = "20px";

const inputs = document.querySelectorAll("input");





let central = document.getElementById("central");

central.style.display = "flex";
central.style.flexDirection = "column";
central.style.alignItems = "center";
central.style.justifyContent = "center";
central.style.width = "50%";
central.style.margin = "auto";
central.style.padding = "20px";
central.style.backgroundColor = "lightgreen";
central.style.borderRadius = "10px";
central.style.boxShadow = "0px 4px 8px rgba(0, 0, 0, 0.2)";





    


