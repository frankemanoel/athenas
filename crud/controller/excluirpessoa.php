<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$codigo = $_POST['codigo'];

if(isset($codigo) && !empty($codigo)) {

	$gerenciador->excluirPessoa("pessoas", $codigo);

	header("Location: ../index.php?client_deleted");
}


 ?>