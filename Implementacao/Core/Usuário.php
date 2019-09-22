<?php 

Class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function setId($id){
    $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha=$senha;
    }
    public function salvar(){
        $conn=ConnectionFactory::getConnection();

        try{
            $stmt=$conn->prepare('INSERT INTO usuario(nome, email, senha) VALUES (:nome, :email, :senha)');
            $stmt->bindValue(':nome', $this->getNome());
            $stmt->bindValue(':email', $this->getEmail());
            $stmt->bindValue(':senha', $this->getSenha());

            $stmt->execute();
            $this->setId($conn->lastInsertId());
        }
        catch(PDOException $e){
            die("Erro ao efetuar o cadastro!" .$e->getMessage());
        }
        $conn=null;
    }
    public function buscar($email){
        $conn=ConnectionFactory::getConnection();
        $stmt=$conn->prepare("SELECT id, nome, email, senha FROM usuario WHERE email=:email");

        try{
            $stmt=execute([':email'=>$email]);
            if($row=$stmt->fetch()){
                $usuario= new Usuario($row['nome'], $row['email'], $row['senha']);
                $usuario->setId($row['id']);
                return $usuario;
            } else {
                return null;
            }
        }
        catch (PDOException $e){
            die("Erro ao buscar usuário! " .$$e->getMessage());
            exit();
        }
        finally {
            $conn=null;
        }
    }

}
?>

