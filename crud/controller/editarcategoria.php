<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$editarcategoria = $_POST;
$categoria = $_POST['categoria'];

if(isset($categoria) && !empty($categoria)){

	$gerenciador->atualizarCategoria("categoria", $editarcategoria, $categoria);

	header("Location: ../indcat.php?cat_update");
}


?>