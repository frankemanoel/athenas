<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';
include_once 'depends.php';

$gerenciador = new Gerenciador();

$codigo = $_POST['codigo'];

?>


<h2 class="text-center">
Alteração de Pessoas <i class="fa fa-user-edit"></i>
</h2><hr>

<form method="POST" action="../controller/editarp.php">

	<div class="container">
		<div class="form-row">
			<br><br>
			<?php foreach($gerenciador->getInfo("pessoas", $codigo) as $client_info): ?>
				<div class="col-md-12">
				Nome: <i class="fa fa-user"></i>
				<input class="form-control" type="text" name="nome" required autofocus value="<?=$client_info['nome']?>"></br>
			</div>

				<div class="col-md-6">
				Email: <i class="fa fa-envelope"></i>
				<input  class="form-control" type="email" name="email" id="email" required value="<?=$client_info['email']?>"></br>
				
			</div>


			<div class="col-md-6">
				Categoria: <i class="fa fa-id-card"></i>

			<select class="form-control" name="categoria" id="categoria">

				<?php foreach($gerenciador->listarCategorias("categoria") as $client): ?>    
				
				<?php if($client['categoria'] == $client_info['categoria']){ ?>
					<option value="<?php echo $client['categoria']; ?> " selected><?php echo $client['nome']; ?></option>
				<?php } ?>

					<option value="<?php echo $client['categoria']; ?>"><?php echo $client['nome']; ?></option>

				<?php endforeach; ?>

			</select>

			<div class="col-md-12">

				<input type="hidden" name="codigo" value="<?=$client_info['codigo']?>">
			<?php endforeach; ?>

				<button class="btn btn-warning btn-lg">
					Salvar <i class="fa fa-user-plus"></i>
				</button>

				<button class="btn btn-secondary btn-lg"> <a href="../index.php">
					Retornar </a>
				</button>

		</div>
	</div>
</form>


