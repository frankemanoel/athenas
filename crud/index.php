<?php 
include_once 'model/Conexao.class.php';
include_once 'model/Gerenciador.class.php';

	$gerenciador = new Gerenciador();

	$pag = $_GET["pagina"];

	 if ($pag == '') { ?>
		<script type="text/javascript">
			window.location.href = "http://localhost/athenas/crud/index.php?pagina=1";
	    </script>
	    
	    <?php 	
	}

	$tr = count($gerenciador->listarPessoa("pessoas"));

	$registros = 5;

	$tp = ceil($tr/5);

	$inicio = ($registros*$pag)-$registros;

	$anterior = $pag-1;
	$proximo =  $pag+1;



?>

<!DOCTYPE html>
<html lang="pt-br">


<html>

<head>
	<?php
		include_once 'view/depends.php';
		include "view/script.php";
	?>

</head>

<body>

<div class="container">
	
	<h2 class="text-center"> Listagem de Pessoas <i class="fa fa-list"></i></h2>
	

	<h5>	
		<a href="view/cadastro.php" class="btn btn-primary btn-xs">Nova Pessoa
			<i class="fa fa-user-plus"></i>
		</a>

		<a href="indcat.php" class="btn btn-dark">Gerenciar Categorias
			<i class="fa fa-id-card"></i>
		</a>


		<button id="verifica" class="btn btn-warning" onclick="verifica()">Verificar Conexão</button>
	</h5>


	

	<div class="table-responsive">
		
		<table class="table table-hover" id="conteudo">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>E-MAIL</th>
					<th>CATEGORIA</th>
					<th id="idacoes" nome="idacoes" colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($gerenciador->listarPessoaLim("pessoas", $inicio, $registros) as $client): ?>
				<tr>
					<td><?php echo $client['codigo']; ?></td>
					<td><?php echo $client['nome']; ?></td>
					<td><?php echo $client['email']; ?></td>
					<td><?php echo $client['categoria']; ?></td>
					<td>
						<form method="POST" action="view/atualizarpessoa.php">

								<input type="hidden" name="codigo" value="<?=$client['codigo']?>">

							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="controller/excluirpessoa.php" onclick="return confirm('Tem certeza que deseja excluir ?');">

							<input type="hidden" name="codigo" value="<?=$client['codigo'] ?>">

							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>

<nav aria-label="Navegação de página exemplo">
  <ul class="pagination">
  	<?php if($pag > 1){  ?>
    		<li class="page-item">
    			<a class="page-link" href="?pagina=<?=$anterior;?>">Anterior</a>
    		</li>

	<?php } ?>

	<?php for($i=1; $i<=$tp; $i++){
		if($pag == $i){
			echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
		} else {

			echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
		}

	} ?>

    <?php 
    	if($pag < $tp){
     ?>
    <li class="page-item">
    	<a class="page-link" href="?pagina=<?=$proximo;?>">Próximo</a>
    </li>
<?php } ?>
  </ul>
</nav>

	</div>



</div>

</body>
</html>

