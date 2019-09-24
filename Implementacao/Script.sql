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
('Biografia'), --1
('Clássicos'), --2
('Suspense'),  --3
('Conto'),     --4
('Drama'),     --5
('Economia'),  --6
('Fantasia'),  --7
('Ficção'),    --8
('Didático'),  --9
('Filosofia'), --10
('Horror'),    --11
('HQs'),       --12
('Humor'),     --13
('Mangá'),     --14
('Romance'),   --15
('Ciências'),  --16
('História'),  --17
('Matemática'),--18
('Geografia'), --19
('Poesia'),    --20
('Sociologia'),--21
('Línguas');   --22

INSERT INTO livro (titulo, autor, editora, imagem, sinopse)
VALUES 

('O Cortiço', 'Aluísio Azevedo', 'Ediouro', 'Imagens_Livros/1/Cortiço.jpg', 'A obra busca recriar a realidade dos agrupamentos humanos sujeitos à influência da raça, do meio e do momento histórico. O predomínio dos instintos no comportamento do indivíduo, a força da sensualidade da mulher mestiça, o meio como fator determinante do comportamento são algumas das teses naturalistas defendidas pelo autor ao lado de denúncias sociais. O protagonista do romance é o próprio cortiço, onde se acotovelam lavadeiras, trabalhadores de pedreira, malandros e viúvas pobres.' ),
('Capitães da Areia', 'Jorge Amado', 'Cia das Letras', 'Imagens_Livros/2/areia.jpg', 'Desde o seu lançamento, em 1937, Capitães da Areia causou escândalo: inúmeros exemplares do livro foram queimados em praça pública, por determinação do Estado Novo. Ao longo de sete décadas a narrativa não perdeu viço nem atualidade, pelo contrário: a vida urbana dos meninos pobres e infratores ganhou contornos trágicos e urgentes. Várias gerações de brasileiros sofreram o impacto e a sedução desses meninos que moram num trapiche abandonado no areal do cais de Salvador, vivendo à margem das convenções sociais. Verdadeiro romance de formação, o livro nos torna íntimos de suas pequenas criaturas, cada uma delas com suas carências e suas ambições: do líder Pedro Bala ao religioso Pirulito, do ressentido e cruel Sem-Pernas ao aprendiz de cafetão Gato, do sensato Professor ao rústico sertanejo Volta Seca. Com a força envolvente da sua prosa, Jorge Amado nos aproxima desses garotos e nos contagia com seu intenso desejo de liberdade.' ),
('X-men: a saga da Fenix Negra','Chris Claremont', 'SALVAT', 'Imagens_Livros/3/fenix.jpg', 'Reunidos por Charles Xavier, os X-Men embarcam numa aventura que os leva ao outro canto da galáxia! Escolhida pela entidade cósmica conhecida como Fênix para ser sua hospedeira, Jean Grey obtém poderes quase absolutos. Mas todo esse poder cobra seu preço, e a x-men acaba se tornando alvo dos Shiars, uma raça alienígena que deseja destruir a Fênix, e tem seus pensamentos manipulados pelo Mestre Mental, que pretende usá-la para atingir seus próprios objetivos malignos. Com sua mente corrompida, Jean se transforma na Fênix Negra e ameaça consumir o Universo. Agora, os X-Men têm de fazer uma escolha impossível: para salvar toda a existência, eles terão de sacrificar sua amada colega!'),
('Vidas Secas', 'Gracilliano Ramos', 'Record', 'Imagens_Livros/4/vidas-secas.jpg', 'Vidas secas acompanha a trajetória da família de Fabiano, Sinha Vitória, os dois filhos do casal e a cachorra Baleia na fuga do sertão em busca de oportunidades. É o romance em que Graciliano alcança o máximo da expressão que vinha buscando em sua prosa: o que impulsiona os personagens é a seca, áspera e cruel, e paradoxalmente a ligação telúrica, afetiva, que expõe naqueles seres em retirada, à procura de meios de sobrevivência e um futuro.'),
('Desafio Infinito', 'Jim Starlin', 'Abril Jovem', 'Imagens_Livros/5/infinito.webp','Na tentativa de atender aos desígnios de sua amada senhora, a Morte, Thanos traça um grandioso estratagema para subjugar as misteriosas entidades cósmicas conhecidas como Anciões e se apoderar das seis Joias do Infinito, artefatos que detêm o controle sobre todos os aspectos do universo. Ao reuni-las, o Titã Louco torna-se o ser mais poderoso do Universo Marvel. Com tamanho poder em mãos, Thanos extingue metade da vida no universo apenas para agradar sua adorada musa. E isso é só o começo. Se não for detido logo, o insano vilão niilista pode usar sua recém-adquirida onipotência para causar o fim do todo o espaço e o tempo. Uma épica saga cósmica que revolucionou a Casa das Ideias, com roteiros de Jim Starlin (A Morte do Capitão Marvel) e arte de Ron Lim e George Pérez. Este volume de 372 páginas reúne as edições The Thanos Quest 1-2 e Infinity Gauntlet 1-6.'),
('A Teia do Aranha', 'Marvel Comics' , 'Abril Jovem', 'Imagens_Livros/6/aranha.jpg', 'Depois de ser picado por uma aranha geneticamente modificada, Peter Parker ganha super poderes e as habilidades da aranha para se agarrar a qualquer superfície. Ele promete usá-los para combater o crime e começa a entender as palavras de seu querido tio Ben: com grandes poderes vêm grandes responsabilidades.' ),
('X-men', 'Marvel Comics', 'Abril Jovem', 'Imagens_Livros/7/xmen.jpg', 'Eles são filhos do átomo superior, o próximo elo na corrente da evolução. Cada um nasceu com uma mutação genética rara, que na puberdade se manifestou em poderes extraordinários. Em um mundo cheio de ódio e preconceito, eles são temidos por aqueles que não podem aceitar suas diferenças. Liderados por Xavier, os X-Men lutam para proteger um mundo que os teme. Eles estão presos em uma batalha contra um ex-colega e amigo, Magneto, que acredita que os humanos e os mutantes não devem viver juntos.'),
('Guerra civil', 'Mark Millar', 'Salvat', 'Imagens_Livros/8/guerracivil.jpg', ' A épica história que provoca a separação do Universo Marvel. Homem de Ferro e Capitão América: dois membros essenciais para os Vingadores, a maior equipe de super-heróis do mundo. Quando uma trágica batalha deixa um buraco na cidade de Stamford, matando centenas de pessoas, o governo americano exige que todos os super-heróis revelem sua identidade e registrem seus poderes. Para Tony Stark – o Homem de Ferro – é um passo lamentável, porém necessário, o que o leva a apoiar a lei. Para o Capitão América, é uma intolerável agressão à liberdade cívica. Assim começa a Guerra Civil.' ),
('A Metamorfose', 'Franz Kafka', 'Kurt Wolff', 'Imagens_Livros/9/metamorfose.jpg', 'A metamorfose é a mais célebre novela de Franz Kafka e uma das mais importantes de toda a história da literatura. Sem a menor cerimônia, o texto coloca o leitor diante de um caixeiro-viajante - o famoso Gregor Samsa - transformado em inseto monstruoso. A partir daí, a história é narrada com um realismo inesperado que associa o inverossímil e o senso de humor ao que é trágico, grotesco e cruel na condição humana - tudo no estilo transparente e perfeito desse mestre inconfundível da ficção universal.'),
('A montanha mágica', 'Thomas Mann', 'Nova Fronteira', 'Imagens_Livros/10/montanha.jpg', 'Neste clássico da literatura alemã, o autor renova a tradição do Bildungsroman - o romance de formação - a partir da trajetória do jovem engenheiro Hans Castorp. Durante uma inesperada estadia em um sanatório para tuberculosos, Hans relaciona-se com uma miríade de personagens enfermos que encarnam os conflitos espirituais e ideológicos que antecedem a Primeira Guerra Mundial. Um dos grandes testamentos literários do século XX e uma das obras inesgotáveis da ficção ocidental.' ),
('O Hobbit', 'J.R.R. Tolkien', 'Martins Fontes', 'Imagens_Livros/11/hobbit.jpg', 'Prelúdio de O Senhor dos Anéis , O Hobbit conquistou sucesso imediato quando foi publicado em 1937. Vendeu milhões de cópias em todo o mundo e estabeleceu-se como um clássico moderno e um dos livros mais influentes de nossa geração. Bilbo Bolseiro é um hobbit que leva uma vida confortável e sem ambições. Mas seu contentamento é perturbado quando Gandalf, o mago, e uma companhia de anões batem à sua porta e levam-no para uma expedição. Eles têm um plano para roubar o tesouro guardado por Smaug, o Magnífico, um grande e perigoso dragão. Bilbo reluta muito em participar da aventura, mas acaba surpreendendo até a si mesmo com sua esperteza e sua habilidade como ladrão! '),
('O vendedor de sonhos', 'Augusto Cury', 'Academia', 'Imagens_Livros/12/vendedor.jpg', 'Um homem desconhecido tenta salvar da morte um suicida. Ninguém sabe sua origem, seu nome sua história. Proclama aos quatro ventos que a sociedades modernas se converteram num hospício Global. Com uma eloquência cativante, começa a chamar seguidores para vender sonhos. Ao mesmo tempo em que arrebata as pessoas e as liberta do cárcere da rotina, arruma muitos inimigos. Será ele um sábio ou um louco?'),
('Perdas & ganhos', 'Lya Luft', 'Record', 'Imagens_Livros/13/perdaseganhos.jpg', 'Lya Luft é uma mulher de seu tempo, e sobre ele dá seu testemunho em tudo o que escreve, especialmente neste novo livro. Uma mulher madura que já experimentou perdas e ganhos, mas mantém o otimismo, ama a vida, se diz “um bicho de sua casa” — embora pouco doméstica, considera sua família o centro da vida, e a vida mais importante do que a literatura. Neste primeiro livro seu publicado pela Record, a romancista, cronista e poeta convida o leitor para refletir ao seu lado, indagar, contemplar e admirar o mundo. "Não somos apenas vítimas de fatalidades", diz. "Somos também senhores de nossa vida." Num misto de ensaio e memórias, Lya retoma diversos temas de O rio do meio — livro publicado em 1996, vencedor do prêmio de melhor livro da Associação Paulista de Críticos de Arte. Considera o ser humano ao mesmo tempo bom e capaz, fútil, medíocre e até cruel. Embarcado numa vida que é um dom, um mistério, e uma conquista a cada momento. Lya acredita que “a felicidade é possível, que não existe só desencontro e traição, mas ternura, amizade, compaixão, ética e delicadeza.” Sobre isso dialoga, aqui, com seu leitor. Entre alegrias, descobertas, decepções e buscas, em Perdas & ganhos — livro inédito desde as memórias de infância Mar de dentro, publicado em 2002 — a autora busca dar um testemunho pessoal sobre a experiência do amadurecimento. Convoca o leitor para ser seu amigo imaginário: cúmplice e companheiro de reflexões que vão da infância à solidão e à morte, ao valor da vida e à transcendência de tudo. Lya divaga, discute e versa, com ímpeto, compaixão, e muitas vezes bom humor, sobre velhice, amor, infância, educação, família, liberdade, homens e mulheres, gente de verdade... e conclui que o tempo passa mas as emoções humanas não mudam, revelando que é preciso reaprender o que é ser feliz. Um livro sensível, delicado e inquietante de uma das mais importantes escritoras brasileiras da atualidade, premiada pela crítica e consagrada pelos leitores.'),
('Quincas Borba', 'Machado de Assis', 'Rovelle', 'Imagens_Livros/14/quincas.jpg', 'Publicado pela primeira vez em livro em 1891, depois portanto de Memórias póstumas de Brás Cubas (1881) e antes de Dom Casmurro (1899), Quincas Borba é uma das obras mais marcantes da fase realista de Machado de Assis. Talvez por se situar justamente entre esses dois monumentos da obra machadiana, o romance muitas vezes foi considerado uma realização menor, uma espécie de mera continuação das Memórias póstumas - para irritação de seu autor, que em um raro comentário sobre a própria ficção afirmou que a presença do personagem Quincas Borba era “o único vínculo” entre os dois livros. Mais do que ao marco inaugural do Realismo no Brasil, porém, Quincas Borba remete ao Machado contista que começava a abordar temas historicamente mais próximos de sua época e a explorar os conflitos psicológicos de seus personagens com sua sofisticada e irônica narrativa em terceira pessoa presente em contos clássicos como “A cartomante” e “A causa secreta”. Neste romance da maturidade do autor, a história do provinciano Rubião - herdeiro da fortuna do idiossincrático filósofo Quincas Borba - e dos tipos urbanos da corte que o levam à ruína é narrada com o distanciamento, o ceticismo e o senso de humor implacável de que só Machado de Assis era capaz. Esta edição de Quincas Borba, além de mais uma centena de notas explicativas, traz uma extensa e abrangente introdução do britânico John Gledson, estudioso da obra machadiana e tradutor de Dom Casmurro para o inglês.'),
('Cândido ou o otimismo', 'Voltaire', 'L&PM', 'Imagens_Livros/15/candido.jpg', 'Até ser expulso de um lindo castelo na Westfália, o jovem Cândido convivia com sua amada, a bela Cunegunda, e tinha a felicidade de ouvir diariamente os ensinamentos de mestre Pangloss, para quem “todos os acontecimentos estão encadeados no melhor dos mundos possíveis”. Apesar da crença absoluta na doutrina panglossiana, do primeiro ao último capítulo, Cândido sofre um sem-fim de desgraças: é expulso do castelo; perde seu amor; é torturado por búlgaros; sobrevive a um naufrágio para em seguida quase perecer em um terremoto; vê seu querido mestre ser enforcado em um auto da fé; é roubado e enganado sucessivas vezes. Cândido só começa a desconfiar do otimismo exacerbado de seu mestre quando ele próprio e todos os que cruzam seu caminho dão provas concretas que o melhor dos mundos possíveis vai, na verdade, muito mal. Cândido ou o Otimismo é um retrato satírico de seu tempo. Escrito em 1758, situa o leitor entre fatos históricos como o terremoto que arrasou Lisboa em 1755 e a Guerra dos Sete Anos (1756-63), enquanto critica com bom-humor as regalias da nobreza, a intolerância religiosa e os absurdos da Santa Inquisição. Já o caricato mestre Pangloss é uma representação sarcástica da filosofia otimista do pensador alemão Gottfried Leibniz (1646-1716). Antecipando o sucesso desbragado e a carreira de escândalo do livro, Voltaire, pseudônimo de François-Marie Arouet, assinou a obra com o enigmático Sr. Doutor Ralph.'),
('O livro de ouro do universo', 'Ronaldo Rogério de Freitas Mourão', 'Ediouro', 'Imagens_Livros/16/livrodeouro.jpg', 'Esta é a primeira viagem que faremos juntos. Uma maravilhosa diferente por mundo quase desconhecidos. Por isso prepare-se. Deixe de lado as preocupações. Esqueça-se da Terra e procure imaginar o mais lindo céu. Com este convite Ronaldo Mourão leva o leitor de O Livro de Ouro do Universo terceiro volume da coleção Livros de Ouro a visitar constelações asteróides planetas cometas meteoros meteoritos e muito mais. A viagem é uma verdadeira aula de Astronomia. Além de ser um dos mais respeitados conhecedores do assunto no Brasil o Prof. Mourão tem a rara capacidade de explicar de modo simples e direto os conceitos mais complexos proporcionando uma leitura ao mesmo tempo instrutiva e prazerosa. Mourão explica como as diversas civilizações compreendiam a Astronomia a mais antiga das ciências e como ela evoluiu através dos tempos. Traz informações sobre Big-Bang, quarks, buracos negros, estrelas canibais, corridas espaciais e extraterrestres despertando ainda mais a nossa curiosidade sobre os mistérios do universo. A mitologia ligada aos astros também é citada no livro assim como dados biográficos dos grandes astrônomos (Ptolomeu, Copérnico, Kepler, Galileu Galilei, Newton, Hubble, entre outros). A obra amplamente ilustrada apresenta ainda poesias e letras de canções criadas em torno do deslumbramento e da indagação humana frente ao universo. Tudo isto faz do convite de Mourão uma viagem inesquecível.'),
('Os botões de Napoleão', 'Penny Le Couteur', 'Zahar', 'Imagens_Livros/17/napoleao.jpg', 'Será que podemos explicar o fracasso da campanha de Napoleão na Rússia, em 1812, por algo tão insignificante quanto um botão? Quando exposto a temperaturas baixas, o estanho se esfarela, e todas as fardas dos regimentos de Napoleão eram fechadas com botões feitos desse material. Com estilo cativante, temperado com diversas histórias curiosas, a professora de química Penny Le Couteur e o químico industrial Jay Burreson fazem uma fascinante análise de 17 grupos de moléculas que, como o estanho daqueles botões, influenciaram o curso da história. Essas moléculas produziram grandes feitos na engenharia e provocaram importantes avanços na medicina e no direito. Além disso, determinaram o que hoje comemos, bebemos e vestimos. Ao revelar as espantosas conexões químicas que unem eventos aparentemente não relacionados, os autores esclarecem que: - Por causa da química, a colônia Nova Amsterdã tornou-se Nova York. - Um contratempo na limpeza da cozinha com um avental de algodão resultou no desenvolvimento dos explosivos modernos e da indústria cinematográfica. - A ânsia dos europeus pela cafeína - um alcalóide que vicia - levou à Revolução Chinesa. - Foi um laboratório químico que, em busca de um analgésico potente, criou a heroína. "Em geral não paramos para pensar na história ou na composição química de especiarias, borracha, nicotina, penicilina ou um sem-número de produtos que mudaram o mundo. Isso é belamente realizado em Os botões de Napoleão, com sua brilhante mescla de química e cultura. O livro é estimulante e de leitura extremamente agradável." Oliver Sacks, autor de Um antropólogo em Marte.'),
('O universo numa casca de noz', 'Stephen Hawking', 'Arx', 'Imagens_Livros/18/noz.jpg', 'Após o enorme sucesso de Uma breve história do tempo, a Intrínseca traz a luxuosa reedição de O universo numa casca de noz, na qual Stephen Hawking se vale de ilustrações, fotos e esquemas detalhados para mostrar grandes descobertas no campo da física teórica. Tudo isso, é claro, com sua conhecida clareza, elucidando temas complexos por meio de conceitos e ideias do dia a dia, como a inflação, as cartas de baralho e as linhas ferroviárias, e permeado com seu peculiar senso de humor.O livro traz muito da personalidade de Hawking, um dos maiores nomes da ciência atual e figura bem conhecida por suas ideias provocadoras e seu carisma. Ele guiará o leitor através do microcosmo quântico e do macrocosmo universal, discutindo as extraordinárias leis que regem o cosmos e as principais teorias hoje debatidas — o que também conta a saga de Hawking e dos físicos mais importantes de todos os tempos atrás do grande objetivo da ciência: a Teoria de Tudo. Para isso, serão apresentados conceitos caros à física teórica, como a supergravidade, a teoria quântica, a teoria-M, a holografia e a dualidade. Também são abordadas as propostas mais relevantes que desafiam o nosso entendimento atual de como funciona o universo.Com astronautas engolidos por buracos negros, viajantes do tempo, o debate sobre a origem do universo (e de todos nós), seu possível fim e a existência de vida em outras galáxias, além de curiosos questionamentos sobre o futuro biológico e tecnológico da humanidade em si, O universo numa casca de noz é leitura obrigatória para aqueles que querem se aventurar no que há de mais instigante hoje na física e para os que almejam ver como muitas vezes a teoria pode ser muito mais extraordinária do que a ficção científica.Lançado originalmente em 2001 e relançado no Brasil agora pela Intrínseca, O universo numa casca de noz ganhou revisão técnica atualizada do professor Amâncio Friaça, astrônomo do Instituto de Astronomia, Geofísica e Ciências Atmosféricas da Universidade de São Paulo.Uma breve história do tempo, relançado pela intrínseca em 2015, já vendeu no Brasil mais de 60 mil exemplares.' ),
('Gaia: Alerta final', 'James Lovelock', 'Intrínseca', 'Imagens_Livros/19/gaia.jpg', 'Em Gaia: alerta final, Lovelock adverte que os problemas ambientais do século XXI são ainda mais ameaçadores do que havia denunciado. As calotas polares estão derretendo rapidamente, e a escassez de água e os desastres naturais se tornaram mais comuns que em qualquer outra época da história recente. Por isso as civilizações de muitos países estarão em perigo, e a vida, tal como conhecemos, corre sérios riscos. Além disso, quase todas as previsões já feitas para a velocidade das mudanças climáticas se basearam em estimativas que, segundo revelam agora observadores profissionais, estavam abaixo da verdadeira rapidez e dos impactos dessas mudanças. Continuamos obcecados pelas ideias "verdes" convencionais que, acreditamos, irão salvar nosso mundo. Mas Lovelock argumenta que somente a Teoria de Gaia, concebida por ele há mais de quarenta anos, poderá de fato nos ajudar a entender esta crise. A Terra abriga pessoas e animais em excesso - essa é a raiz do problema. Nesse livro Lovelock explica o que poderia ser feito para amenizar os problemas gerados pela mudança climática, mas considera improvável que adotemos essas soluções. Isso incluiria, entre outras medidas, reduzir a população, mudar a maneira de produzir alimentos e aplicar soluções de geoengenharia para desacelerar o aquecimento global, e assim tornar habitáveis espaços em alguns continentes. "Nosso desejo de manter as coisas como estão provavelmente nos impedirá de nos salvarmos", alerta. Difícil imaginar uma mensagem mais importante para a humanidade. James Lovelock é um observador ativo e celebrado pelas conclusões precisas sobre o meio ambiente e as ameaças à Terra desde os anos 60. Foi o primeiro a constatar o acúmulo de CFCs e de outros gases no ar. Esse é seu último aviso.'),
('A grande história da evolução', 'Richard Dawkins', 'Cia. das Letras', 'Imagens_Livros/20/evolucao.jpg', 'A grande história da evolução é uma peregrinação ao longo da árvore genealógica da vida. Partindo de onde estamos hoje, passamos por quarenta entroncamentos onde nos deparamos com ancestrais e peregrinos que vêm de outros ramos. O ponto de chegada situa-se há 4 bilhões de anos, na origem da vida.' ),
('One Piece', 'Eiichiro Oda', 'Conrad','', 'Era uma vez um grande pirata, conhecido como o maior pirata de todos os tempos, Gol D. Roger. Ele conseguiu fama, poder, dinheiro. Só que um dia ele foi capturado pelas forças da Marinha. Antes de ser decapitado ele disse "Vocês querem meu tesouro? Tudo bem. Meu maior tesouro, One Piece, está no final da Grande Linha". Assim começou a Era dos Piratas. Todo mundo se dirige para a Grande Linha, pois diz a lenda que quem conseguir o One Piece será o maior pirata de todos os tempos.O mundo é divido em quatro partes. A ilha que Gol D. Roger colocou o One Piece fica no meio, e o único jeito de chegar nela é indo pela Grande Linha, um lugar onde somente os melhores sobrevivem.Nossa história segue para um vilarejo onde um pirata chamado Shanks está com seu grupo. Um garoto do vilarejo, Monkey D. Luffy, quer virar pirata do grupo de Shanks. Depois de tanto gritar ele fica com fome, e abre uma caixinha que Shanks tinha guardado, e acha uma fruta. Ele a come e a acha gostosa. Ele não sabia que essa era uma Akuma no Mi (fruta do diabo), a Gomu Gomu no Mi, Fruta da Borracha. Com isso ele ganhou o poder de se esticar que nem borracha, só que ele nunca mais iria poder nadar. Depois de ser sequestrado, Shanks o salva, perdendo um braço, e é quando Ruffy entende o que é um pirata. Shanks dá para Ruffy seu chapéu de palha, e espera que Ruffy um dia devolva ele, e como um pirata. Vários anos depois, Ruffy parte de sua cidade para ser o maior pirata, indo atrás de uma tripulação e de um barco.')




INSERT INTO genero_livro (id_livro, id_genero) VALUES 
(1, 15),
(1, 5),
(1, 2),
(2, 8),
(3, 12),
(4, 15),
(4, 5),
(5, 12),
(6, 12),
(7, 12),
(8, 12),
(9, 5),
(9, 8),
(10, 8),
(10, 15),
(11, 7),
(11, 2),
(12, 15),
(12, 2),
(13, 4),
(13, 1),
(14, 2),
(14, 15),
(15, 15),
(15, 2),
(16, 16),
(17, 17),
(18, 16),
(19, 16),
(20, 16),




