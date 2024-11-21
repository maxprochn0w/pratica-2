<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Solicitação</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>Cadastro de Solicitação</header>
    <form method="POST">
        <select name="id_cliente">
            <?php
            $clientes = $pdo->query("SELECT * FROM Clientes")->fetchAll();
            foreach ($clientes as $cliente) {
                echo "<option value='{$cliente['id_cliente']}'>{$cliente['nome']}</option>";
            }
            ?>
        </select>
        <textarea name="descricao" placeholder="Descrição da solicitação" required></textarea>
        <select name="urgencia">
            <option value="baixa">Baixa</option>
            <option value="média">Média</option>
            <option value="alta">Alta</option>
        </select>
        <button type="submit">Cadastrar Solicitação</button>
    </form>
</body>
</html>
