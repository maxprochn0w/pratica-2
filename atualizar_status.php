<?php
include("../includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_solicitacao = $_POST['id_solicitacao'];
    $status = $_POST['status'];

    $sql = "UPDATE Solicitações SET status = ? WHERE id_solicitacao = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$status, $id_solicitacao]);

    echo "Status atualizado com sucesso!";
}
?>

<form method="POST">
    <select name="id_solicitacao">
        <?php
        $solicitacoes = $pdo->query("SELECT * FROM Solicitações")->fetchAll();
        foreach ($solicitacoes as $solicitacao) {
            echo "<option value='{$solicitacao['id_solicitacao']}'>Solicitação {$solicitacao['id_solicitacao']}</option>";
        }
        ?>
    </select>
    <select name="status">
        <option value="pendente">Pendente</option>
        <option value="em andamento">Em Andamento</option>
        <option value="finalizada">Finalizada</option>
    </select>
    <button type="submit">Atualizar Status</button>
</form>
