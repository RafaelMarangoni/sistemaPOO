<?php

    class Pessoas{
        
        private $nome;
        private $idade;
        private $CPF;
        
        
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            //$nome = $novoNome;
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
        
        // public function cadastrarPessoa($con){

        // }
    };

    ?>
   