<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$data = $_POST;

if(isset($data) && !empty($data)){

	$gerenciador->inserirPessoa("categoria", $data);
	header("Location: ../indcat.php?cat_add_success");
}

 ?>