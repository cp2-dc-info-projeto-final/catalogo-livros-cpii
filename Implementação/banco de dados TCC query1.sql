use [catalogo de livros];


create table livro(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
autor VARCHAR(80) NOT NULL,
titulo VARCHAR(30) NOT NULL,
editora VARCHAR(30) NOT NULL,
sinopse VARCHAR(220) NOT NULL,

);

 create table usuario(
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(50) NOT NULL,
 senha VARCHAR (20) NOT NULL,
 email VARCHAR (60) NOT NULL,

 );

 create table usuariolivro (
 
 idlivro INT,
 idusuario INT,
 );
 
 create table categoria(
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR (20) NOT NULL,
  
);

create table moderador (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome varchar (60) NOT NULL,
CPF varchar (11) NOT NULL,
telefone varchar (11),
email varchar (60) NOT NULL,
senha varchar (20) NOT NULL,

);

create table endereco (

id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
estado varchar(30) NOT NULL,
cidade varchar (40) NOT NULL,
bairro varchar (40) NOT NULL,
logradouro varchar (50) NOT NULL,
numero varchar (05) NOT NULL,

); 

create table acao (

id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
datahorario datetime,
descricao varchar (40),
);
);