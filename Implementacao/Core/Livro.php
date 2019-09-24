<?php

Class Livro{
    private $id;
    private $titulo;
    private $editora;
    private $sinopse;
    private $imagem;
    private $genero=[];

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    public function getEditora(){
        return $this->editora;
    }
    public function setEditora($editora){
        $this->editora=$editora;
    }
    public function getSinopse(){
        return $this->sinopse;
    }
    public function setSinopse($sinopse){
        $this->sinopse=$sinopse;
    }
    public function getImagem(){
        return $this->imagem;
    }
    public function setImagem($imagem){
        $this->imagem=$imagem;
    }
    public function setGenero($genero){
        $this->genero=$genero;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function salvar(){
        $conn= ConnectionFactory::getConnection();
        try{
            $stmt=$conn->prepare('INSERT INTO livro (titulo, autor, editora, sinopse) 
            VALUES (:titulo, :autor :editora, :sinopse )');
            $stmt->bindValue(':titulo', $this->getTitulo());
            $stmt->bindValue(':autor', $this->getTitulo());
            $stmt->bindValue(':editora', $this->getEditora());
            $stmt->bindValue(':sinopse', $this->getSinopse());

            $stmt->execute();
            $this->setId($conn, lastInsertId());
        }
        catch(PDOException $e){
            die("Erro ao cadastrar o livro! ".$e->getMessage());
        }
        $conn=null;
    }

    public function associa_genero($livro_id, $genero_id){
        $conn= ConnectionFactory::getConnection();
        $stmt=$conn->prepare("INSERT INTO genero_livro(idlivro, idgenero) VALUES ($livro_id, $genero_id)");
        try{
            $stmt->execute();
        }
        catch (PDOException $e){
            die("Erro " .$e->getMessage());
        }
        finally{
            $conn=null;
        }
    }

    
}