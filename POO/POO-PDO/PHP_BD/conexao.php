<?php
    //MySQL
    $db = new PDO ("mysql:host=localhost; dbname=pdo", "root", "");

    //var_dump($db);
    //echo "<br><br>";
    //print_r($db);

    echo "<h1>Exemplo de consulta com uma linha</h1>";
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetch(PDO::FETCH_ASSOC); //Todos os registros retornados
    print_r ($todos);
    echo "<br>";
    echo $todos["email"];

    echo "<br><br><br>";

    echo "<h1>Exemplo de consulta com muitas linhas</h1>";
    $dados = $db->query("SELECT * FROM clientes WHERE id <= 15");
    $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
    foreach($todos as $linha){

        echo "<br>";
        echo "<br>";
        echo "linha: ".$linha["id"];
        echo "<br>";
        echo "Nome: ".$linha["nome"];
        echo "<br>";
        echo "E-mail:".$linha["email"];
    }

    echo "<h2>Inserindo dados</h2>";

    /*
    $statement= $db->prepare("INSERT INTO clientes(nome, email) VALUES (?,?)");

    $statement->execute(array("Attina", "attina@gmail.com"));
    $statement->execute(array("Tom Mate", "tommate@gmail.com"));
    $statement->execute(array("Pacheco", "pacheco@gmail.com"));
    */

   

?>