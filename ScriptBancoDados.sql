#Criando o Banco de Dados
CREATE DATABASE py;

#Selecionando o Banco de Dados
USE py;

#Criando a tabela que ficará armazenada as mensagens
CREATE TABLE mensagens(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	mensagens TEXT NOT NULL,
	hora VARCHAR(50),
	ip VARCHAR(50) NOT NULL
);