<?php

Class Genero{
    private $id;
    private $nome;

    public function transporta_generos(){
        $conn= ConnectionFactory::getConnection();
        $generos=null;
        $generos=[];
        $stmt= $conn->prepare("SELECT id, nome FROM genero");
        try{
        $stmt->execute();
        while ($row=$stmt->fetch()){
            $genero=new Genero($row['id'], $row['nome']);
            array_push($generos, $genero);
        }
        return $generos;
        } catch (PDOException $e){
            die("Erro ". $e->getMessage());
            exit();
        }
        finally{
            $conn=null;
        }
    }

    public function prepara_livros_por_genero($id_genero){
        $conn=ConnectionFactory::getConnection();
        $stmt=$conn->prepare("SELECT autor, titulo, editora, sinopse, imagem FROM livro AS l 
        JOIN genero_livro AS k ON l.id=k.id_livro JOIN genero AS g ON k.id_genero=g.id WHERE id_genero=$id_genero");
        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            die("Erro! ". $e->getMessage());
            exit();
        } finally{
            $conn=null;
        }
    }
}