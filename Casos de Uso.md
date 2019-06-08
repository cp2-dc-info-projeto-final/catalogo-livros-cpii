# Casos de Uso

## Sumário
- [CDU 01](#cdu-01---cadastro-de-usuários)
- [CDU 02](#cdu-02---cadastro-de-moderadores)
- [CDU 03](#cdu-03---login)
- [CDU 04](#cdu-04---indicação-de-livros)
- [CDU 05](#cdu-05---pesquisa-de-livros)
- [CDU 06](#cdu-06---lista-de-livros-interessantes)
- [CDU 07](#cdu-07---consulta-da-lista-de-livros-interessantes)
- [CDU 08](#cdu-08---alteração-de-perfil)
- [CDU 09](#cdu-09---gerenciamento-do-acervo)
- [CDU 10](#cdu-10---adição-de-títulos)
- [CDU 11](#cdu-11---remoção-de-títulos)



### CDU 01 - Cadastro de Usuários

**Atores:** Usuários

**Fluxo Principal:**
1. O usuário vai para a área de cadastro através da tela de login;
2. Usuário informa nome; nome de usuário; e-mail; senha e gêneros favoritos de livros, segundo as opções disponíveis;
3. O sistema verifica a validade das informações. Sendo válidas, o cadastro é efetuado.

**Fluxo Alternativo:** 
1. Alguma informação não é válida. Logo, o sistema retorna uma mensagem de erro sinalizando o campo a ser preenchido corretamente.


 ### CDU 02 - Cadastro de Moderadores

**Atores:** Moderadores

**Pré-condições:** Ser um moderador do sistema

**Fluxo Principal:**
1. Um moderador previamente cadastrado vai para a área de cadastro de moderadores através da tela de login;
2. O moderador informa nome; registro; e-mail; senha e gêneros favoritos de livros, segundo as opções disponíveis no sistema;
3. O sistema verifica a validade das informações. Sendo válidas, o mesmo direciona o moderador para uma tela de cadastro de outros moderadores;
4. São informados nome, registro, e-mail e senha do novo moderador;
5. O sistema verifica a validade das informações. Sendo as elas aceitas, um novo moderador é cadastrado.

**Fluxo Alternativo 1:** 
1. Alguma informação do moderador já existente não é encontrada no sistema. Neste caso, o software retorna uma mensagem de erro informando qual campo não é válido.

**Fluxo Alternativo 2:** 
1. Alguma informação do novo moderador não é válida. Neste caso, o software retorna uma mensagem de erro informando qual campo precisa ser preenchido novamente. 


### CDU 03 - Login

**Atores:** Usuários e Moderadores

**Pré-condições:** Estar cadastrado no sistema

**Fluxo Principal:**
1. Um usuário ou moderador, previamente cadastrado no sistema, informa nome de usuário e senha;
2. Estando esses dados corretos, o usuário comum é direcionado para a página principal de sugestão de livros. Já o moderador é direcionado para a página de gerenciamento de cadastros.

**Fluxo Alternativo:**
1. Algum campo de login não foi preenchido com uma informação existente no banco de dados. Neste caso, uma mensagem é exposta sinalizando o erro.


### CDU 04 - Indicação de Livros

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado no mesmo

**Fluxo Principal:**
1. Após efetuar o login, o usuário ou moderador é direcionado para uma página inicial onde recebe indicações de livros baseados em seus gêneros preferidos previamente informados. As buscas recentes do usuário em questão também influenciam os resultados. Há também a opção de selecionar os livros que aparecem e ver informações sobre o mesmo


### CDU 05 - Pesquisa de Livros

**Atores**: Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado no mesmo

**Fluxo Principal:**
1. O usuário ou moderador, após efetuar o login no software, possui a opção de pesquisar por livros previamente armazenados no sistema;
2. O usuário ou moderador digita, no campo adequado, o nome da obra que deseja encontrar informações sobre;
3. Se o título constar no banco de dados, o sistema retornará o mesmo, com informações sobre o livro;
4. É possível, do mesmo modo, pesquisar por livros de uma mesma categoria, com a ferramenta de filtro.

**Fluxo Alternativo:**
1. Caso a obra não seja encontrada no sistema, uma mensagem informando isso aparecerá.


### CDU 06 - Lista de Livros Interessantes

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado

**Fluxo Principal**: 
1. Ao clicar em um livro, o usuário/moderador tem a opção de enviá-lo a uma lista de livros de seu interesse para futuras consultas pessoais.


### CDU 07 - Consulta da Lista de Livros Interessantes

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado

**Fluxo Principal:**
1. O usuário/moderador possui uma lista de livros de seu interesse e a acessa;
2. O mesmo pode excluir obras da lista a qualquer momento.

**Fluxo Alternativo:**
1. Caso a lista esteja vazia, uma mensagem sinalizará esta condição.


### CDU 08 - Alteração de Perfil

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado

**Fluxo Principal:**
1. O usuário/moderador acessa os dados informados no cadastro de seu perfil e os altera, com exceção da senha;
2. Há, também, a opção de adicionar ou mudar uma foto de perfil.


### CDU 09 - Gerenciamento do Acervo

**Atores:** Moderadores

**Pré-condições:** Ter um cadastro no sistema como moderador e estar logado

**Fluxo Principal:**
1. O moderador do software tem a possibilidade de alterar o acervo do sistema;
2. O moderador tem as opções de adicionar ou alterar informações de livros já cadastrados no banco de dados, assim como excluir títulos.


### CDU 10 - Adição de Títulos

**Atores:** Moderadores

**Pré-condições:** Ter um cadastro no sistema como moderador e estar logado

**Fluxo Principal:**
1. O moderador pode adicionar novos títulos ao sistema;
2. O mesmo informa nome, autor, data de lançamento, o gênero e uma breve sinopse da obra, além de adicionar a capa;
3. Após esse processo, os usuários ficam disponíveis para visualizar o livro e adicioná-lo à lista de interesses.

### CDU 11 - Remoção de Títulos

**Atores:** Moderadores

**Pré-condições:** Ter um cadastro no sistema como moderador e estar logado

**Fluxo Principal:**
1. O moderador seleciona um livro da lista ou digita seu nome no campo adequado;
2. Caso existe algum título com o nome especificado ou o moderador selecione algum da lista, ele pode excluí-lo;
3. Após a exclusão, a obra é deletada do banco de dados do software, não sendo possível voltar atrás.
