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
imagem VARCHAR(400)
);

drop table if exists genero_livro;
create table genero_livro(
    id_livro INT,
    id_genero INT,
    FOREIGN KEY (id_livro) REFERENCES livro(id),
    FOREIGN KEY (id_genero) REFERENCES genero(id)
);

drop table if exists usuario;
 create table usuario(
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(50)  NOT NULL,
 email VARCHAR (60)  NOT NULL,
 senha VARCHAR (250) NOT NULL,
 moderador BOOLEAN NOT NULL,
 id_genero INT,
 FOREIGN KEY (id_genero) REFERENCES genero(id)
);

drop table if exists lista_usuario;
 create table lista_usuario (
 
 idlivro INT,
 idusuario INT,
 FOREIGN KEY (idusuario) REFERENCES usuario(id),
 FOREIGN KEY (idlivro) REFERENCES livro(id)
 );
 
drop table if exists acao;
create table acao (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
datahorario DATETIME,
descricao VARCHAR (100) ,
id_usuario INT NOT NULL,
id_livro INT NOT NULL,
FOREIGN KEY (id_usuario) REFERENCES usuario(id),
FOREIGN KEY (id_livro) REFERENCES livro(id)
);

INSERT INTO genero (nome) VALUES
('Biografia'), /*1*/
('Clássicos'), /*2*/
('Suspense'),  /*3*/
('Conto'),     /*4*/
('Drama'),     /*5*/
('Economia'),  /*6*/
('Fantasia'),  /*7*/
('Ficção'),    /*8*/
('Didático'),  /*9*/
('Filosofia'), /*10*/
('Horror'),    /*11*/
('HQs'),       /*12*/
('Humor'),     /*13*/
('Mangá'),     /*14*/
('Romance'),   /*15*/
('Ciências'),  /*16*/
('História'),  /*17*/
('Matemática'),/*18*/
('Geografia'), /*19*/
('Poesia'),    /*20*/
('Sociologia'),/*21*/
('Línguas');   /*22*/

INSERT INTO livro (titulo, autor, editora, imagem, sinopse)
VALUES ('O Cortiço', 'Aluísio Azevedo', 'Ediouro', 'Imagens_Livros/1/Cortiço.jpg', 'A obra busca recriar a realidade dos agrupamentos humanos sujeitos à influência da raça, do meio e do momento histórico. O predomínio dos instintos no comportamento do indivíduo, a força da sensualidade da mulher mestiça, o meio como fator determinante do comportamento são algumas das teses naturalistas defendidas pelo autor ao lado de denúncias sociais. O protagonista do romance é o próprio cortiço, onde se acotovelam lavadeiras, trabalhadores de pedreira, malandros e viúvas pobres.' ),
('Capitães da Areia', 'Jorge Amado', 'Cia das Letras', 'Imagens_Livros/2/areia.jpg', 'Desde o seu lançamento, em 1937, Capitães da Areia causou escândalo: inúmeros exemplares do livro foram queimados em praça pública, por determinação do Estado Novo. Ao longo de sete décadas a narrativa não perdeu viço nem atualidade, pelo contrário: a vida urbana dos meninos pobres e infratores ganhou contornos trágicos e urgentes. Várias gerações de brasileiros sofreram o impacto e a sedução desses meninos que moram num trapiche abandonado no areal do cais de Salvador, vivendo à margem das convenções sociais. Verdadeiro romance de formação, o livro nos torna íntimos de suas pequenas criaturas, cada uma delas com suas carências e suas ambições: do líder Pedro Bala ao religioso Pirulito, do ressentido e cruel Sem-Pernas ao aprendiz de cafetão Gato, do sensato Professor ao rústico sertanejo Volta Seca. Com a força envolvente da sua prosa, Jorge Amado nos aproxima desses garotos e nos contagia com seu intenso desejo de liberdade.' ),
('X-men: a saga da Fenix Negra','Chris Claremont', 'SALVAT', 'Imagens_Livros/3/fenix.jpg', 'Reunidos por Charles Xavier, os X-Men embarcam numa aventura que os leva ao outro canto da galáxia! Escolhida pela entidade cósmica conhecida como Fênix para ser sua hospedeira, Jean Grey obtém poderes quase absolutos. Mas todo esse poder cobra seu preço, e a x-men acaba se tornando alvo dos Shiars, uma raça alienígena que deseja destruir a Fênix, e tem seus pensamentos manipulados pelo Mestre Mental, que pretende usá-la para atingir seus próprios objetivos malignos. Com sua mente corrompida, Jean se transforma na Fênix Negra e ameaça consumir o Universo. Agora, os X-Men têm de fazer uma escolha impossível: para salvar toda a existência, eles terão de sacrificar sua amada colega!'),





('Naruto','Masashi Kishimoto','Panini Comics','Imagens_Livros/176/naruto.jpg','Naruto é um jovem órfão habitante da Vila da Folha que sonha se tornar o quinto Hokage, o maior guerreiro e governante da vila. Ao se graduar como ninja, descobre que tem um demônio raposa selado dentro de si. Seu pai, o quarto Hokage, aprisionou a raposa no próprio filho quando a raposa ameaçava destruir a Vila da Folha, sacrificando assim a própria vida. Agora Naruto vai contar com a ajuda dos colegas Sakura e Sasuke e do professor dos três, Kakashi Hatake, para perseguir seu sonho e deter os ninjas que planejam fazer mal á sua cidade.'),
('Dragon Ball','Akira Toriyama','Conrad','','A lenda diz que quem reunir as sete Esferas do Dragão terá um desejo realizado pelo poderoso deus Sheng Long. O problema é que elas estão espalhadas pelo mundo em lugares desconhecidos, tornando a sua coleta quase impossível. É aí que o talento da jovem cientista Bulma, criadora de um radar que pode detectá-las, entra em ação. Para conseguir cumprir sua missão, ela tentará convencer Son Goku, um garoto com força sobre-humana e um rabo de macaco, a unir-se a ela naquela que será a maior aventura de suas vidas. Dragon Ball é uma série divertida e inovadora que influenciou não apenas os mangás, mas se tornou um fenômeno da cultura pop com seu humor único e ação alucinante. Nesta edição definitiva, com acabamento de luxo e diversas páginas totalmente coloridas, voe com Goku e seus amigos em busca das Esferas do Dragão.');

INSERT INTO genero_livro (id_livro, id_genero) VALUES 
(1, 15),
(1, 5),
(1, 2),
(2, 8),
(3, 12),
(3, 8),



(176, 14),
(176, 2),
(177, 14).
(177, );