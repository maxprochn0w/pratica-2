<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Solicitações</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>Solicitações</header>
    <form method="GET">
        <select name="filter_status">
            <option value="pendente">Pendente</option>
            <option value="em andamento">Em Andamento</option>
            <option value="finalizada">Finalizada</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Urgência</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitacoes as $solicitacao): ?>
                <tr>
                    <td><?php echo $solicitacao['id_solicitacao']; ?></td>
                    <td><?php
                        $cliente = $pdo->query("SELECT * FROM Clientes WHERE id_cliente = {$solicitacao['id_cliente']}")->fetch();
                        echo $cliente['nome']; ?>
                    </td>
                    <td><?php echo $solicitacao['descricao']; ?></td>
                    <td><?php echo $solicitacao['status']; ?></td>
                    <td><?php echo $solicitacao['urgencia']; ?></td>
                    <td>
                        <a href="atualizar_status.php?id=<?php echo $solicitacao['id_solicitacao']; ?>">Atualizar Status</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
