<?php
    
    if($_REQUEST){
        $pessoa = $_REQUEST['pessoa'];
        
    }else{
        header("location:index.php?pessoas");
    }
?>

<h1>Olá <?php echo $pessoa->getNome();?> Seu Cadastro foi concluido!</h1>