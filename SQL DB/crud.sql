-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS cruddb;

-- Seleciona o banco de dados a ser usado
USE cruddb;

-- Criação da tabela "users"
CREATE TABLE IF NOT EXISTS users (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(55) NOT NULL,
    sobrenome VARCHAR(55) NOT NULL,
    email VARCHAR(55) NOT NULL,
    telefone VARCHAR(25) NOT NULL
);

INSERT INTO users (nome, sobrenome, email, telefone)
VALUES ('Oscar', 'Lima', 'limaoscarlima@gmail.com', '22 99876-5432');