    // Captura a URL atual
    const params = new URLSearchParams(window.location.search);

    
    // Verifica se o parâmetro "status" está presente e tem o valor "success"
    if (params.get("status") === "success") {
        alert("Conexão bem-sucedida!");


    }
    // Verifica se o parâmetro "status" está presente e tem o valor "error
    else if (params.get("status") === "error") {
        alert("Erro ao conectar!");
        }
