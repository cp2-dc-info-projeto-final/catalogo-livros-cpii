use catalogo_de_livros;


create table livro(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
autor VARCHAR(80) NOT NULL,
titulo VARCHAR(30) NOT NULL,
editora VARCHAR(30) NOT NULL,
sinopse VARCHAR(700) NOT NULL,
imagem VARCHAR(400) NOT NULL,
classificacao VARCHAR(100) NOT NULL,
genero VARCHAR (100),
foreign key (idcategoria) REFERENCES categoria (idlivro), 
);

 create table usuario(
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(50) NOT NULL,
 email VARCHAR (60) NOT NULL,
 senha VARCHAR (250) NOT NULL
);

 create table usuariolivro (
 
 idlivro INT,
 idusuario INT,
 foreign key (idusuario) REFERENCES usuario(idusuario),
 foreign key (idlivro) REFERENCES livro(idlivro)
 );
 
 create table genero(
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR (20) NOT NULL,
 foreign key (idlivro) REFERENCES livro (idlivro)
 );

 create table generousuario(
 idusuario INT,
 idcategoria INT,
 foreign key (idusuario) REFERENCES usuario(idusuario),
 foreign key (idgenero) REFERENCES categoria(idgenero)
 );
 

create table moderador (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
CPF varchar (11) NOT NULL,
telefone varchar (11) NOT NULL,
idusuario int,
idendereco int,
foreign key (idusuario) REFERENCES usuario (id),
foreign key (idendereco) REFERENCES endereco (id)
);

create table endereco (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
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
