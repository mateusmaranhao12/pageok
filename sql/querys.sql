CREATE TABLE cadastro_clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    whatsapp VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    confirmacao BOOLEAN NOT NULL,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);