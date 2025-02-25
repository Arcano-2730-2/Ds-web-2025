<?php


// Conectar ao banco de dados
$db = new PDO ("mysql:host=localhost; dbname=loja", "root", ""); 
// Verificar se a conexão foi bem-sucedida
if (!$db) {
die('Erro na conexão: ' . mysqli_connect_error());
}

echo "<br>";
?>