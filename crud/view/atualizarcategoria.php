<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';
include_once 'depends.php';

$gerenciador = new Gerenciador();

$categoria = $_POST['categoria'];

?>


<h2 class="text-center">
Alteração de Pessoas <i class="fa fa-user-edit"></i>
</h2><hr>

<form method="POST" action="../controller/editarcategoria.php">

	<div class="container">
		<div class="form-row">
			<br><br>
			<?php foreach($gerenciador->getInfoCat("categoria", $categoria) as $client_info): ?>
				<div class="col-md-12">
				Nome: <i class="fa fa-user"></i>
				<input class="form-control" type="text" name="nome" required autofocus value="<?=$client_info['nome']?>"></br>
			</div>

				<div class="col-md-12">

				<input type="hidden" name="categoria" value="<?=$client_info['categoria']?>">
			<?php endforeach; ?>

				<button class="btn btn-warning btn-lg">
					Salvar <i class="fa fa-user-plus"></i>
				</button>

				<button class="btn btn-secondary btn-lg"> <a href="../indcat.php">
					Retornar </a>
				</button>

		</div>
	</div>
</form>


