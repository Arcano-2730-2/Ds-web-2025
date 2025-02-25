<?php
// Inclui a conexão com o banco de dados
include_once("connection.php");

if ($_POST['form_type'] === 'cliente') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Preparar e executar a query com PDO corretamente
    $statement = $db->prepare("INSERT INTO cliente(nome, email) VALUES (?, ?)");
    $executou = $statement->execute([$nome, $email]);

    if ($executou) {
        header("Location: index.php?status=success");
        exit;
    } else {
        header("Location: index.php?status=error&message=" . urlencode($statement->errorInfo()[2]));
        exit;
    }
}
?>