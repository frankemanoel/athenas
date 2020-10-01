<?php 


include_once 'depends.php';
include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();
?>



<h2 class="text-center">
Cadastro de Categoria <i class="fa fa-user-plus"></i>
</h2><hr>

<form method="POST" action="../controller/salvarc.php">

	<div class="container">
		<div class="form-row">
			<br><br>
				<div class="col-md-12">
				Categoria: <i class="fa fa-user"></i>
				<input class="form-control" type="text" name="nome" required autofocus></br>
			</div>
 
			
			
			</div>

			<div class="col-md-12">

				<button class="btn btn-primary btn-lg">
					Salvar <i class="fa fa-user-plus"></i>
				</button>

				<button class="btn btn-secondary btn-lg"> <a href="../index.php">
					Retornar </a>
				</button>

		</div>
	</div>
</form>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
$(document).ready(function() {
  $("#categoria").keyup(function() {
      $("#categoria").val(this.value.match(/[0-9]*/));
  });
});

</script>