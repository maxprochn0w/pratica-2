<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>Cadastro de Cliente</header>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" required>
        <input type="text" name="cpf" placeholder="CPF (xxx.xxx.xxx-xx)" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="telefone" placeholder="Telefone">
        <button type="submit">Cadastrar Cliente</button>
    </form>
</body>
</html>
