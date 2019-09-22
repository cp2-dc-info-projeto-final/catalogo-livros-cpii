<?php

Class Livro{
    private $id;
    private $titulo;
    private $editora;
    private $sinopse;
    private $imagem;

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
    public function salvar(){
        $conn= ConnectionFactory::getConnection();
        try{
            $stmt=$conn->prepare('INSERT INTO livro (titulo, editora, sinopse) 
            VALUES (:titulo, :editora, :sinopse )');
            $stmt->bindValue(':titulo', $this->getTitulo());
            $stmt->bindValue(':editora', $this->getEditora());
            $stmt->bindValue('sinopse', $this->getSinopse());

            $stmt->execute();
            $this->setId($conn, lastInsertId());
        }
        catch(PDOException $e){
            die("Erro ao cadastrar o livro! ".$e->getMessage());
        }
        $conn=null;
    }

    
}