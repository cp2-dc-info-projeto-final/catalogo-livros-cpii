use catalogo_de_livros;


create table livro(
idlivro INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
autor VARCHAR(80) NOT NULL,
titulo VARCHAR(30) NOT NULL,
editora VARCHAR(30) NOT NULL,
sinopse VARCHAR(220) NOT NULL,
imagem VARCHAR(200) NOT NULL,
);

 create table usuario(
 idusuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nomedeusuario VARCHAR(40) NOT NULL,
 nome VARCHAR(50) NOT NULL,
 senha VARCHAR (250) NOT NULL,
 email VARCHAR (60) NOT NULL
);

 create table usuariolivro (
 
 idlivro INT,
 idusuario INT,
 foreign key (idusuario) REFERENCES usuario(idusuario),
 foreign key (idlivro) REFERENCES livro(idlivro)
 );
 
 create table categoria(
 idcategoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR (20) NOT NULL
 );

 create table categoriausuario(
 idusuario INT,
 idcategoria INT,
 foreign key (idusuario) REFERENCES usuario(idusuario),
 foreign key (idcategoria) REFERENCES categoria(idcategoria)
 );
 
 create table categorialivro(
 idcategoria INT,
 idlivro INT,
 foreign key (idcategoria) REFERENCES categoria (idlivro),
 foreign key (idcategoria) REFERENCES livro (idlivro)
 );

create table moderador (
idmoderador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
CPF varchar (11) NOT NULL,
telefone varchar (11) NOT NULL,
idusuario int,
idendereco int,
foreign key (idusuario) REFERENCES usuario (id),
foreign key (idendereco) REFERENCES endereco (id)
);

create table endereco (
idendereco INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
estado varchar(30) NOT NULL,
cidade varchar (40) NOT NULL,
bairro varchar (40) NOT NULL,
logradouro varchar (50) NOT NULL,
numero varchar (05) NOT NULL
); 

create table acao (

id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
datahorario datetime,
descricao varchar (40),
usuario int not null,
livro int,
foreign key (usuario) REFERENCES usuario(idusuario),
foreign key (livro) REFERENCES livro(idlivro)
);
