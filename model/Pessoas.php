<?php

    class Pessoas{
        //------------------------ ATRIBUTOS
        private $nome;
        private $idade;
        private $CPF;
        
        function __construct($nome,$idade,$CPF){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->CPF = $CPF;

        }
        //------------------------- METODOS
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){            
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }
        
        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getCPF(){
            return $this->CPF;
        }
        
        public function setCPF($CPF){
            $this->CPF = $CPF;
        }        
        
        public function cadastrarPessoa($con,$pessoa){
            try{
                $query = $con->prepare("INSERT INTO usuarios(nome,idade,cpf) VALUES(?,?,?)");
                $query->execute([
                    $pessoa->getNome(),
                    $pessoa->getIdade(),
                    $pessoa->getCPF()
                ]);
                    return $query;
            }catch(PDOException $e){
                return false;
            }
        }
    }

    ?>
   