CREATE DATABASE locadora;

USE locadora;

CREATE TABLE filmes
(
	id_filme INT not null auto_increment,
    nome VARCHAR(40),
    PRIMARY KEY (id_filme)
);

INSERT INTO filmes 
	(nome)
VALUES
	("A Hora do Pesadelo"),
	("Bem-Hur"),
	("Como Eu Era antes de Você"),
	("Estrada sem Lei"),
	("Forrest Gump – O Contador de Histórias"),
	("Harry Potter e a Ordem da Fênix"),
	("Intocáveis"),
	("It – A Coisa"),
	("Minha Mãe É uma Peça"),
	("O Iluminado"),
	("O Resgate do Soldado Ryan"),
	("Os Infiltrados"),
	("Vingadores"),
	("Pantera Negra"),
	("Para Todos os Garotos que Já Amei"); 

ALTER TABLE filmes
ADD genero VARCHAR(10),
ADD ano YEAR;

ALTER TABLE filmes
MODIFY COLUMN genero
ENUM ("AÇÃO", "AVENTURA", "COMÉDIA", "DRAMA", "POLICIAL", "ROMANCE", "TERROR");

UPDATE acervo SET genero = "Terror", ano = "1986" WHERE id_filme = 1;
UPDATE acervo SET genero = "Aventura", ano = "1960" WHERE id_filme = 2;
UPDATE acervo SET genero = "Romance", ano = "2016" WHERE id_filme = 3;
UPDATE acervo SET genero = "Comédia", ano = "2014" WHERE id_filme = 4;
UPDATE acervo SET genero = "Comédia", ano = "1994" WHERE id_filme = 5;
UPDATE acervo SET genero = "Aventura", ano = "2007" WHERE id_filme = 6;
UPDATE acervo SET genero = "Drama", ano = "2012" WHERE id_filme = 7;
UPDATE acervo SET genero = "Terror", ano = "2017" WHERE id_filme = 8;
UPDATE acervo SET genero = "Comédia", ano = "2013" WHERE id_filme = 9;
UPDATE acervo SET genero = "Terror", ano = "1980" WHERE id_filme = 10;
UPDATE acervo SET genero = "Drama", ano = "1998" WHERE id_filme = 11;
UPDATE acervo SET genero = "Policial", ano = "2006" WHERE id_filme = 12;
UPDATE acervo SET genero = "Ação", ano = "2012" WHERE id_filme = 13;
UPDATE acervo SET genero = "Ação", ano = "2018" WHERE id_filme = 14;
UPDATE acervo SET genero = "Romance", ano = "2018" WHERE id_filme = 15;

SELECT * FROM acervo;

CREATE TABLE usuario
(
	id INT not null auto_increment,
    nome VARCHAR(15),
    senha VARCHAR(15),
    PRIMARY KEY (id)
);

INSERT INTO usuario
(nome, senha)
VALUES
("admin","admin");

select * from usuario;

