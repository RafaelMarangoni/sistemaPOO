<?php 

    class Funcionario extends Pessoas{

        private $salario; 
        private $usuario;
        private $senha; 

        function __construct($nome,$idade,$CPF, $salario,$senha, $usuario){
            parent:: __construct($nome,$idade,$CPF);        
            $this->salario = $salario;
            $this->senha = $senha;
            $this->usuario = $usuario;
        }


        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
    
        public function getUsuario(){
            return $this->usuario;
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        public function cadastrarFuncionario($con,$funcionario){
            try{
                $query = $con->prepare("INSERT INTO funcionario(nome,idade,CPF, salario,senha, usuario) VALUES(?,?,?,?,?,?)");
                $query->execute([
                    $funcionario->getNome(),
                    $funcionario->getIdade(),
                    $funcionario->getCPF(),
                    $funcionario->getSalario(),
                    $funcionario->getSenha(),
                    $funcionario->getUsuario()
                ]);
                    return $query;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }

?>