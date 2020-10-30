CREATE DATABASE atividade2;
USE atividade2;

CREATE TABLE atleta (
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(200) NOT NULL,
    idade INT(3) NOT NULL,
    altura DECIMAL(3,2) NOT NULL,
    peso DECIMAL(6,3) NOT NULL,
    
    PRIMARY KEY(id)
);

INSERT INTO atleta(nome, idade, altura, peso)VALUES('Marcos', 20,1.73, 75.00);
INSERT INTO atleta(nome, idade, altura, peso)VALUES('João', 32, 1.80, 78);
INSERT INTO atleta(nome, idade, altura, peso)VALUES('Maria', 19, 1.65, 65);


