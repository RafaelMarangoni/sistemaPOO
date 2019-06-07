<?php
    
    if(isset($_REQUEST['pessoa'])){
        $pessoa = $_REQUEST['pessoa'];
        
    }
    else if($_REQUEST['funcionario']){
        $pessoa = $_REQUEST['funcionario'];
        
    }else{
        header("location:index.php?Pessoas");
    }
?>

<h1>Olá <?php echo $pessoa->getNome();?> Seu Cadastro foi concluido!</h1>