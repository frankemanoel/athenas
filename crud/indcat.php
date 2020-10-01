<?php 
include_once 'model/Conexao.class.php';
include_once 'model/Gerenciador.class.php';

	$gerenciador = new Gerenciador();
?>
<!DOCTYPE html>
<html lang="pt-br">


<html>

<head>
	<?php include_once 'view/depends.php'; ?>
	<script type="text/javascript" src="script.js"></script>

</head>
<body>

<div class="container">
	
	<h2 class="text-center"> Listagem de Categorias <i class="fa fa-list"></i></h2>


	<h5>	
		<a href="view/cadcategoria.php" class="btn btn-primary btn-xs">Nova Categoria
			<i class="fa fa-user-plus"></i>
		</a>

		<a href="index.php?pagina=1" class="btn btn-dark">Voltar
			<i class="fa fa-id-card"></i>
		</a>
	</h5>


	

	<div class="table-responsive">
		
		<table class="table table-hover" id="conteudo">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>CATEGORIA</th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($gerenciador->listarCategorias("categoria") as $client): ?>
				<tr>
					<td><?php echo $client['categoria']; ?></td>
					<td><?php echo $client['nome']; ?></td>
					<td>
						<form method="POST" action="view/atualizarcategoria.php">

								<input type="hidden" name="categoria" value="<?=$client['categoria']?>">

							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="controller/excluircategoria.php" onclick="return confirm('Tem certeza que deseja excluir ?');">

							<input type="hidden" name="categoria" value="<?=$client['categoria'] ?>">

							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>



</div>

</body>
</html>