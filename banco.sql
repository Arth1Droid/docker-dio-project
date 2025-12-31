
CREATE DATABASE IF NOT EXISTS supermercado;
USE supermercado;

CREATE TABLE vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto VARCHAR(100),
    quantidade INT,
    valor DECIMAL(10,2),
    caixa VARCHAR(50),
    host VARCHAR(50),
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
