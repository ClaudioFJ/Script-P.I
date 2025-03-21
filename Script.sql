-- Cria��o do banco de dados chamado ESTOQUE
CREATE DATABASE ESTOQUE_ECOMM;

-- Sele��o do banco de dados ESTOQUE para usar
USE ESTOQUE_ECOMM;


-- Cria��o da tabela "produtos"
CREATE TABLE produtos (
    ID INT IDENTITY(1,1) PRIMARY KEY,         -- Identificador �nico do produto, autoincrementado
    NOME VARCHAR(255) NOT NULL,                -- Nome do produto
    DESCRICAO TEXT,                            -- Descri��o do produto
    PRECO DECIMAL(10, 2) NOT NULL,             -- Pre�o do produto (com duas casas decimais)
    QUANTIDADE_EM_ESTOQUE INT NOT NULL         -- Quantidade em estoque
);

-- Inser��o de dados exemplo na tabela "produtos"
INSERT INTO produtos (NOME, DESCRICAO, PRECO, QUANTIDADE_EM_ESTOQUE)
VALUES
    ('Rel�gio Rolex', 'Rel�gio dourado', 1999.99, 50),
    ('Bracelete de Couro', 'Bracelete de couro vermelho trancado', 3499.99, 30),
    ('Bracelete de prata', 'Bracelete de prata ajust�vel Rivera brilhante', 499.99, 100),
    ('Rel�gio de luxo', 'Rel�gio de ouro 18K', 12999.99, 10),
    ('Pulseira de prata', 'Pulseira em prata 925', 899.99, 25),
    ('Colar de diamantes', 'Colar cravejado em diamantes', 25499.99, 5),
    ('Anel de safira', 'Anel com safira azul', 7999.99, 15),
    ('Brincos de ouro', 'Brincos em ouro 18K', 3499.99, 20),
    ('Rel�gio smart', 'Rel�gio inteligente com GPS', 2199.99, 40),
    ('Pingente de esmeralda', 'Pingente com esmeralda colombiana', 6999.99, 12);






	-- Sele��o do banco de dados ESTOQUE
USE ESTOQUE_ECOMM;

-- Cria��o da tabela "usuarios"
CREATE TABLE usuarios (
    ID INT IDENTITY(1,1) PRIMARY KEY,         -- Identificador �nico do usu�rio, autoincrementado
    EMAIL VARCHAR(255) NOT NULL,               -- E-mail do usu�rio
    SENHA VARCHAR(255) NOT NULL                -- Senha do usu�rio
);

-- Inser��o de dados fict�cios na tabela "usuarios"
INSERT INTO usuarios (EMAIL, SENHA)
VALUES
    ('wesley.mssantos3@senacsp.edu.br', 'senha123'),
    ('farthurdiasdasilva@gmail.com', 'senha456'),
    ('Claudio.fjunior20@outlook.com', 'senha789'),
    ('juliae_os@outlook.com.br', 'senha1011');



	SELECT * FROM usuarios;
