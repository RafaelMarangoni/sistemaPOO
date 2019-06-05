<?php

class Usuarios extends Pessoas{
    private $login;
    private $senha;

    function __construct($nome,$idade,$CPF, $login,$senha){
        parent:: __construct($nome,$idade,$CPF);        
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getlogin(){
        return $this->login;
    }
    public function setlogin($login){
        $this->login = $login;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function cadastrarPessoa($con,$pessoa){
        try{
            $query = $con->prepare("INSERT INTO usuarios(nome, idade, cpf, usuario, senha) VALUES(?,?,?,?,?)");
            $query->execute([
                $pessoa->getNome(),
                $pessoa->getIdade(),
                $pessoa->getCPF(),
                $pessoa->getLogin(),
                $pessoa->getSenha()
            ]);
                return $query;
        }catch(PDOException $e){
            return false;
        }
    }
}