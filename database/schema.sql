CREATE DATABASE IF NOT EXISTS aula_camadas
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE aula_camadas;

CREATE TABLE IF NOT EXISTS contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    mensagem TEXT NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO contatos (nome, email, mensagem)
SELECT 'Contato de exemplo', 'exemplo@email.com', 'Registro inicial para conferir se a listagem está funcionando.'
WHERE NOT EXISTS (
    SELECT 1
    FROM contatos
    WHERE email = 'exemplo@email.com'
);
