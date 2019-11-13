# Casos de Uso

## Sumário
- [CDU 01](#cdu-01---cadastro)
- [CDU 02](#cdu-02---login)
- [CDU 03](#cdu-03---indicação-de-livros)
- [CDU 04](#cdu-04---pesquisa-de-livros)
- [CDU 05](#cdu-05---lista-de-livros-salvos)
- [CDU 06](#cdu-06---indicação-por-autores)
- [CDU 07](#cdu-06---consulta-da-lista-de-livros-salvos)
- [CDU 08](#cdu-07---alteração-de-gêneros-de-interesse)
- [CDU 09](#cdu-08---gerenciamento-do-acervo)
- [CDU 10](#cdu-09---adição-de-títulos)
- [CDU 11](#cdu-10---remoção-de-títulos)
- [CDU 12](#cdu-11---gráfico-de-gêneros-mais-populares)
- [CDU 13](#cdu-12---transformação-de-usuários-em-moderadores)


### CDU 01 - Cadastro

**Atores:** Usuários

**Fluxo Principal:**
1. O usuário vai para a área de cadastro através da tela de login;
2. Usuário informa nome, e-mail, senha e três gêneros literários que possui afinidade, segundo as opções disponíveis;
3. O sistema verifica a validade das informações. Sendo válidas, o cadastro é efetuado.

**Fluxo Alternativo:** 
1. Alguma informação não é válida (não corresponde aos requisitos do campo em específico). Logo, o sistema retorna uma mensagem de erro sinalizando o campo a ser preenchido corretamente.


### CDU 02 - Login

**Atores:** Usuários e Moderadores

**Pré-condições:** Estar cadastrado no sistema.

**Fluxo Principal:**
1. Um usuário/moderador, previamente cadastrado no sistema, informa nome de usuário e senha;
2. Estando esses dados corretos, o usuário/moderador é direcionado para a página principal de sugestão de livros.

**Fluxo Alternativo:**
1. Algum campo de login não foi preenchido com uma informação existente no banco de dados. Neste caso, uma mensagem é exposta sinalizando o erro.


### CDU 03 - Indicação de Livros

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado no mesmo.

**Fluxo Principal:**
1. Após efetuar o login, o usuário ou moderador é direcionado para uma página inicial onde recebe indicações de livros baseados em seus gêneros preferidos previamente informados. Há também a opção de selecionar os livros que aparecem e ver informações sobre os mesmos.


### CDU 04 - Pesquisa de Livros

**Atores**: Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado no mesmo.

**Fluxo Principal:**
1. O usuário ou moderador, após efetuar o login no software, possui a opção de pesquisar por livros previamente armazenados no sistema;
2. O usuário ou moderador digita, no campo adequado, o nome da obra que deseja encontrar informações sobre;
3. Se o título constar no banco de dados, o sistema retornará o mesmo, com informações sobre o livro;

**Fluxo Alternativo:**
1. Caso a obra não seja encontrada no sistema, nenhuma obra aparecerá na tela.


### CDU 05 - Lista de Livros Salvos

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado.

**Fluxo Principal**: 
1. Ao clicar em um livro, o usuário/moderador tem a opção de enviá-lo a uma lista de livros de seu interesse para futuras consultas pessoais.
  2. Já tendo a obra sido adicionada à lista do usuário/moderador, será mostrada a opção de removê-la.
  
  ### CDU 06 - indicação por Autores

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado.

**Fluxo Principal:**
1. Após o usuário adicionar um livro em sua lista de livros salvos, mais obras do mesmo autor aparecem em sua página Home.

**Fluxo Alternativo:**
1. Caso não haja nenhuma outra obra daquele autor que não tenha sido salva, nada de novo aparecerá na tela

### CDU 07 - Consulta da Lista de Livros Salvos

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado.

**Fluxo Principal:**
1. O usuário/moderador possui uma lista de livros de seu interesse e a acessa pela página Home do site;
2. O mesmo pode excluir obras da lista a qualquer momento.

**Fluxo Alternativo:**
1. Caso a lista esteja vazia, a mesma não aparecerá na tela.


### CDU 08 - Alteração de Gêneros de Interesse

**Atores:** Usuários e Moderadores

**Pré-condições:** Ter um cadastro no sistema e estar logado.

**Fluxo Principal:**
1. O usuário/moderador, ao final da página Home, possui a opção de alterar os três gêneros que detém afinidade (gêneros esses informados no cadastro).

### CDU 09 - Gerenciamento do Acervo

**Atores:** Moderadores

**Pré-condições:** Ter um cadastro no sistema como moderador e estar logado

**Fluxo Principal:**
1. O moderador do software tem a possibilidade de alterar o acervo do sistema;
2. O moderador tem as opções de adicionar livros no banco de dados, assim como excluir títulos.


### CDU 10 - Adição de Títulos

**Atores:** Moderadores

**Pré-condições:** Ter um cadastro no sistema como moderador e estar logado.

**Fluxo Principal:**
1. O moderador pode adicionar novos títulos ao sistema;
2. O mesmo informa nome, autor, editora, o gênero e uma breve sinopse da obra, além de adicionar a capa;
3. Após esse processo, os usuários ficam disponíveis para visualizar o livro e adicioná-lo à lista de interesses.

### CDU 11 - Remoção de Títulos

**Atores:** Moderadores

**Pré-condições:** Ter um cadastro no sistema como moderador e estar logado.

**Fluxo Principal:**
1. O moderador seleciona um livro a partir da página Home ou do campo de pesquisa;
2. Caso existe algum título com o nome especificado ou o moderador selecione algum da lista, ele pode excluí-lo;
3. Após a exclusão, a obra é deletada do banco de dados do software, não sendo possível voltar atrás.

### CDU 12 - Gráfico de Gêneros Mais Populares

**Atores:** Moderadores

**Pré-condições:** Ter um cadastro no sistema como moderador e estar logado.

**Fluxo Principal:**
1. O moderador acessa sua página e encontra, na mesma, um gráfico com os gêneros mais escolhidos pelos usuários em geral como seus favoritos.

### CDU 13 - Transformação de Usuários em Moderadores

**Atores:** Moderadores

**Pré-condições:** Ter um cadastro no sistema como moderador e estar logado.

**Fluxo Principal:**
1. O moderador possui, em sua página, uma tabela de usuários cadastrados no sistema;
2. Ele pode, assim, promover usuários comuns ao posto de moderadores, assim como rebaixá-los a usuários convencionais;
3. Ao tornar usuários novos moderadores, os mesmos podem ter acesso a todas as funcionalidades exclusivas da classe.


