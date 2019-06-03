<?php
// require_once "Pessoas.php";

// //colocamos new pessoa para poder atribuir pessoas na classe função modelo
// $pessoa = new Pessoas();
// //atribuimos um valor valor no setnome para poder executar;
// $pessoa->setNome("vinicius");
// $pessoa->setIdade(30);
// var_dump($pessoa);
$controller = key($_GET);
$controller.= "Controller";

require_once "controller/$controller.php";

$obj = new $controller();
$obj->view($_SERVER['REQUEST_METHOD']);

?>