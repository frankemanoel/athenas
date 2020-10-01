<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$categoria = $_POST['categoria'];

if(isset($categoria) && !empty($categoria)) {

	$gerenciador->excluirCategoria("categoria", $categoria);

	header("Location: ../indcat.php?cat_deleted");
}


 ?>