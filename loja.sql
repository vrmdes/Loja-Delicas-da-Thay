-- SQL exemplo para criar tabela de produtos
CREATE DATABASE IF NOT EXISTS loja_doces;
USE loja_doces;
CREATE TABLE IF NOT EXISTS produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  preco DECIMAL(10,2) NOT NULL
);
INSERT INTO produtos (nome, preco) VALUES ('Brigadeiro', 5.00), ('Bolo de pote', 12.50);
