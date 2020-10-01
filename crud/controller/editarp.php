<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$editarpessoa = $_POST;
$codigo = $_POST['codigo'];

if(isset($codigo) && !empty($codigo)){

	$gerenciador->atualizarPessoa("pessoas", $editarpessoa, $codigo);

	header("Location: ../index.php?client_update");
}


?>