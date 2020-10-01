<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$data = $_POST;

if(isset($data) && !empty($data)){

	$gerenciador->inserirPessoa("pessoas", $data);
	header("Location: ../index.php?client_add_success");
}

 ?>