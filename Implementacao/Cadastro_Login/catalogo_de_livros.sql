use catalogo_de_livros;

drop table if exists genero;
 create table genero(
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR (20) NOT NULL
 );

drop table if exists livro;
create table livro(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
autor VARCHAR(80)  NOT NULL,
titulo VARCHAR(30)  NOT NULL,
editora VARCHAR(30) NOT NULL,
sinopse VARCHAR(700) NOT NULL,
imagem VARCHAR(400),
classificacao VARCHAR(100) NOT NULL UNIQUE
);

drop table if exists genero_livro;
create table genero_livro(
    idlivro INT,
    idgenero INT,
    foreign key (idlivro) REFERENCES livro(id),
    foreign key (idgenero) REFERENCES genero(id)
);

drop table if exists usuario;
 create table usuario(
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(50)  NOT NULL,
 email VARCHAR (60)  NOT NULL,
 senha VARCHAR (250) NOT NULL
);

drop table if exists lista_usuario;
 create table lista_usuario (
 
 idlivro INT,
 idusuario INT,
 foreign key (idusuario) REFERENCES usuario(id),
 foreign key (idlivro) REFERENCES livro(id)
 );

drop table if exists genero_usuario;
 create table genero_usuario(
 idusuario INT,
 idgenero INT,
 foreign key (idusuario) REFERENCES usuario(id),
 foreign key (idgenero) REFERENCES genero(id)
 );
 

drop table if exists moderador;
create table moderador (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
CPF varchar (11)  NOT NULL,
telefone varchar (11)  NOT NULL,
idusuario int,
idendereco int,
foreign key (idusuario) REFERENCES usuario (id),
foreign key (idendereco) REFERENCES endereco (id)
);

drop table if exists endereco;
create table endereco (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
estado varchar(30) NOT NULL,
cidade varchar (40) NOT NULL,
bairro varchar (40) NOT NULL,
logradouro varchar (50) NOT NULL,
numero varchar (05) NOT NULL
); 

drop table if exists acao;
create table acao (

id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
datahorario datetime,
descricao varchar (40) ,
usuario int not null,
livro int,
foreign key (usuario) REFERENCES usuario(idusuario),
foreign key (livro) REFERENCES livro(idlivro)
);

INSERT INTO genero (nome) VALUES
('Biografia'),
('Clássicos'),
('Suspense'),
('Conto'),
('Drama'),
('Economia'),
('Fantasia'),
('Ficção'),
('Didático'),
('Filosofia'),
('Horror'),
('HQs'),
('Humor'),
('Mangá'),
('Romance'),
('Ciências'),
('História'),
('Matemática'),
('Geografia'),
('Poesia'),
('Sociologia'),
('Línguas');