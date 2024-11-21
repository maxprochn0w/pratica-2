CREATE DATABASE GerenciamentoSolicitacoes;
USE GerenciamentoSolicitacoes;

CREATE TABLE Clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone VARCHAR(15) NOT NULL,
    CONSTRAINT chk_cpf CHECK (LENGTH(cpf) = 14)
);

CREATE TABLE Funcionarios (
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    cargo VARCHAR(100),
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone VARCHAR(15) NOT NULL
);

CREATE TABLE Solicitações (
    id_solicitacao INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    descricao TEXT NOT NULL,
    urgencia ENUM('baixa', 'média', 'alta') NOT NULL,
    status ENUM('pendente', 'em andamento', 'finalizada') DEFAULT 'pendente',
    data_abertura DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_funcionario INT NULL,
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente) ON DELETE CASCADE,
    FOREIGN KEY (id_funcionario) REFERENCES Funcionarios(id_funcionario) ON DELETE SET NULL
);

CREATE INDEX idx_solicitacao_status ON Solicitações(status);
CREATE INDEX idx_solicitacao_urgencia ON Solicitações(urgencia);
CREATE INDEX idx_solicitacao_funcionario ON Solicitações(id_funcionario);

