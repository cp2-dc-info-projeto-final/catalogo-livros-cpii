# Requisitos do Indicador de Livros do Colégio Pedro II

## Requisitos Não Funcionais
- [RNF 01](#rnf-01)
- [RNF 02](#rnf-02)
- [RNF 03](#rnf-03)
- [RNF 04](#rnf-04)
- [RNF 05](#rnf-05)
- [RNF 06](#rnf-06)
- [RNF 07](#rnf-07)

### RNF 01    
+ O software deve conter as linguagens: HTML, CSS, JavaScript e PHP;

### RNF 02
+ Deve possibilitar cadastro de diferentes usuários ao mesmo tempo;

### RNF 03
+ Deve possibilitar o login de diferentes usuários ao mesmo tempo;

### RNF 04
+ Deve ter ligação com o banco de dados;

### RNF 05
+ Deve possuir suporte para plataformas Web e Mobile;

### RNF 06
+ Deve suportar o armazenamento de ao menos 15 mil livros;

### RNF 07
+ Deve rodar em tempo integral;

## Requisitos Funcionais
- [RF 01](#rf-01)
- [RF 02](#rf-02)
- [RF 03](#rf-03)
- [RF 04](#rf-04)
- [RF 05](#rf-05)
- [RF 06](#rf-06)
- [RF 07](#rf-07)
- [RF 08](#rf-08)
- [RF 09](#rf-09)
- [RF 10](#rf-10)

### RF 01
O sistema gerencia cadastro e informações dos livros, de usuários e moderadores.
    
    + Informações do Livro:

        * Informações do sistema quanto a livros:

  	        1. Título;
  	        2. Autor;
  	        3. Aquisição;
  	        4. Observações;
  	        5. Volume;
  	        6. Edição;
  	        7. Editora;
  	        8. Exemplares;
  	        9. Classificação;


    + Informações do Usuário:

        * Informações do sistema quanto a usuários:

  	        1. Nome;
  	        2. Telefone;
  	        3. E-mail;   
  	        4. Senha;

    + Informações do sistema quanto ao moderador:

        * Inf

  	        1. CPF;
  	        2. Nome;
  	        3. Telefone;
	        4. Estado;
	        5. Endereço;
  	        6. E-mail;
  	        7. Senha.

### RF 02
+ Todas as informações do Usuário e dos Livros são guardadas em um banco de dados.

### RF 03
+ O Moderador tem acesso a várias informações, para visualização, de todos os usuários, menos à senha.

### RF 04
+ O Usuário terá acesso somente a suas respectivas informações informando e-mail e senha;

### RF 05
+ O Moderador poderá ter acesso ao sistema informando e-mail e senha. 

### RF 06
+ Livros

    * O Moderador gerencia os livros contidos na biblioteca: catalogando-os, emprestando-os ou excluindo-os dos registros.
    * O Moderador cadastra os livros da biblioteca e as informações são armazenadas em um banco de dados.

### RF 07
+ Os livros, após cadastrados no sistema, possuirão suas informações parcialmente disponibilizadas aos Usuários.
 
### RF 08
+ Os dados do usuário serão coletados pelo algoritmo para uma melhor experiência com a biblioteca.

### RF 09
+ Os livros serão divididos em categorias e subcategorias.

### RF 10
+ O algoritmo fará recomendações por conteúdo baseada em leituras passadas.
