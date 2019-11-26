# Requisitos do Catálogo de Livros do Colégio Pedro II

## Requisitos Não Funcionais
- [RNF 01](#rnf-01)
- [RNF 02](#rnf-02)
- [RNF 03](#rnf-03)
- [RNF 04](#rnf-04)

### RNF 01    
+ O software deve conter as linguagens: HTML, CSS, JavaScript, PHP e SQL;

### RNF 02
+ Deve ter ligação com o banco de dados MySQLi;

### RNF 04
+ Deve possuir suporte para plataformas Web;

### RNF 04
+ Deve suportar o armazenamento de ao menos 250 livros;

## Requisitos Funcionais
- [RF 01](#rf-01)
- [RF 02](#rf-02)
- [RF 03](#rf-03)
- [RF 04](#rf-04)
- [RF 05](#rf-05)
- [RF 06](#rf-06)
- [RF 07](#rf-07)
- [RF 08](#rf-08)

### RF 01
O sistema gerencia cadastro e informações dos livros, de usuários e moderadores.
    
    + Informações do Livro:

        * Informações do sistema quanto a livros:

  	        1. Título;
  	        2. Autor;
  	        3. Sinopse;
  	        4. Editora;
            5. Imagem de Capa.


    + Informações do Usuário:

        * Informações do sistema quanto a usuários:

  	        1. Nome;
  	        2. E-mail;   
  	        3. Senha.


    + Informações do sistema quanto ao moderador:

  	        1. Nome;
  	        2. E-mail;
  	        3. Senha.


### RF 02
+ O Usuário terá acesso somente às suas informações, informando e-mail e senha.

### RF 03
+ O Moderador poderá ter acesso ao sistema informando e-mail e senha. 

### RF 04
+ O Usuário/Moderador poderá alterar os gêneros de seu interesse.

### RF 05
+ Livros

    * O Moderador gerencia os livros contidos na biblioteca catalogando-os ou excluindo-os dos registros;
    * O Moderador cadastra os livros da biblioteca e as informações são armazenadas em um banco de dados.

### RF 06
+ Os livros, após cadastrados no sistema, possuirão suas informações disponibilizadas aos Usuários.

### RF 07
+ Os livros serão divididos em categorias, baseados em seus gêneros.

### RF 08
+ O algoritmo fará recomendações por conteúdo baseada em preferências de gênero/autor.

### RF 09
+ O moderador poderá tornar outros usuários moderadores.

### RF 010
+ O moderador deverá ter acesso a uma lista de gêneros mais populares no sistema.
