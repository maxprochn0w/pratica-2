SELECT * FROM Solicitações
WHERE status = 'pendente'
AND urgencia = 'alta';

UPDATE Solicitações
SET status = 'em andamento'
WHERE id_solicitacao = 1;

UPDATE Solicitações
SET id_funcionario = 2
WHERE id_solicitacao = 1;

