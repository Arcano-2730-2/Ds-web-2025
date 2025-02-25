<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clientes</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<?php
// Inclui a conexão com o banco de dados
include_once("connection.php");


if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        echo "<script>alert('Dados enviados com sucesso!');</script>";
    } elseif ($_GET['status'] == 'error' && isset($_GET['message'])) {
        echo "<script>alert('Erro: " . htmlspecialchars($_GET['message']) . "');</script>";
    }
}
?>

<!-- Formulário Cliente -->
<div class="cliente">
    <h2>Cadastro de Cliente</h2>
    <form action="insertion.php" method="POST">
        <input type="hidden" name="form_type" value="cliente">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</div>
<?php
include_once("connection.php");

// Busca registros de clientes
$sqlClientes = "SELECT * FROM cliente";
$clientes = $db->query($sqlClientes)->fetchAll();
?>

<div class="registros">
    <h2>Clientes Registrados</h2>
    <?php if (count($clientes) > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= htmlspecialchars($cliente['id']) ?></td>
                    <td><?= htmlspecialchars($cliente['nome']) ?></td>
                    <td><?= htmlspecialchars($cliente['email']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum cliente registrado.</p>
    <?php endif; ?>

</div>
</div>

</body>
<script src="script.js"></script>
</html>