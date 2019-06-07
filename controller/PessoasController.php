<?php

require_once "model/Pessoas.php";
require_once "model/Usuarios.php";
require_once "model/conexao.php";
require_once "model/Funcionario.php";

class PessoasController{


    public function view($server){
        global $con;
        switch ($server) {
            case 'GET':
                require_once "view/cadastro.php";
                break;
            case 'POST':

                $tipoPessoa= $_POST['tipoPessoa'];
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];
                $cpf = $_POST['cpf'];
                $usuario = $_POST['usuario'];
                $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                $salario = $_POST['salario'];

                //validando o tipo do pessoa se ela eh usuario ou  funcionario
                if($tipoPessoa  == "usuario"){
                        $novoUsuario = new Usuarios(
                        $nome,
                        $idade,
                        $cpf,
                        $usuario,
                        $senha
                    
                    );
                    
                    if($novoUsuario->cadastrarPessoa($con,$novoUsuario)){
                        $_REQUEST['pessoa'] = $novoUsuario;
        
                        require_once "view/sucesso.php";

                    }else{
                        echo "deu ruim";
                    }
                
                }elseif ($tipoPessoa == "funcionario") {
                    $novoFuncionario = new Funcionario(
                        $nome,
                        $idade,
                        $cpf,
                        $salario,
                        $senha, 
                        $usuario

                    );
                    if ($novoFuncionario->cadastrarFuncionario($con,$novoFuncionario)) {
                        $_REQUEST['funcionario'] = $novoFuncionario;

                        require_once "view/sucesso.php";

                    }else{
                        echo 'deu ruim'; 
                    }
                }
              
                break;  

                
        }
        
    }



}


?>