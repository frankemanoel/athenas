<?php 

class Gerenciador extends Conexao {

	public function inserirPessoa($table, $data) {

		$pdo = parent::getInstancia();

		$fields = implode(", ", array_keys($data));
		$values = ":".implode(", :", array_keys($data));

		$sql = "INSERT INTO $table ($fields) VALUES ($values)";

		$statement = $pdo->prepare($sql);

		foreach($data as $key => $value){
			$statement->bindValue(":$key", $value, PDO::PARAM_STR);
		}

		$statement->execute();

	}	

	public function listarPessoa($table){
		$pdo = parent::getInstancia();
		$sql = "SELECT * FROM $table ORDER BY codigo ASC";
		$statement = $pdo->query($sql);
		$statement->execute();

		return $statement->fetchAll();
	}

	public function listarPessoaLim($table, $inicio,$registros){
		$pdo = parent::getInstancia();
		$sql = "SELECT * FROM $table ORDER BY codigo ASC LIMIT $inicio,$registros";
		$statement = $pdo->query($sql);
		//$statement->bindVParam( ':inicio', (int) $inicio, PDO::PARAM_INT);
		//$statement->bindParam( ':registros', (int) $registros, PDO::PARAM_INT);
		$statement->execute();

		return $statement->fetchAll();
	}	

	public function listarCategorias($table){
		$pdo = parent::getInstancia();
		$sql = "SELECT * FROM $table ORDER BY categoria ASC";
		$statement = $pdo->query($sql);
		$statement->execute();

		return $statement->fetchAll();
	}

	public function excluirPessoa($table, $codigo){
		$pdo = parent::getInstancia();
		$sql = "DELETE FROM $table WHERE codigo = :codigo";
		$statement = $pdo->prepare($sql);
		$statement->bindValue(":codigo", $codigo);
		$statement->execute();
	}

	public function excluirCategoria($table, $categoria){
		$pdo = parent::getInstancia();
		$sql = "DELETE FROM $table WHERE categoria = :categoria";
		$statement = $pdo->prepare($sql);
		$statement->bindValue(":categoria", $categoria);
		$statement->execute();
	}	


	public function getInfo($table, $codigo){
		$pdo = parent::getInstancia();
		$sql = "SELECT * FROM $table WHERE codigo = :codigo";
		$statement = $pdo->prepare($sql);
		$statement->bindValue(":codigo", $codigo);
		$statement->execute();

		return $statement->fetchAll();

}

	public function getInfoCat($table, $categoria){
		$pdo = parent::getInstancia();
		$sql = "SELECT * FROM $table WHERE categoria = :categoria";
		$statement = $pdo->prepare($sql);
		$statement->bindValue(":categoria", $categoria);
		$statement->execute();

		return $statement->fetchAll();

}


		public function atualizarPessoa($table, $data, $codigo){
			$pdo = parent::getInstancia();
			$newvalues = "";
			foreach($data as $key => $value){
				$newvalues .= "$key=:$key, ";
			}
			$newvalues = substr($newvalues, 0, -2);
			$sql = "UPDATE $table SET $newvalues WHERE codigo = :codigo";
			$statement = $pdo->prepare($sql);
			foreach($data as $key => $value){
				$statement->bindValue(":$key", $value, PDO::PARAM_STR);
				}
				$statement->execute();
		}

		public function atualizarCategoria($table, $data, $categoria){
			$pdo = parent::getInstancia();
			$newvalues = "";
			foreach($data as $key => $value){
				$newvalues .= "$key=:$key, ";
			}
			$newvalues = substr($newvalues, 0, -2);
			$sql = "UPDATE $table SET $newvalues WHERE categoria = :categoria";
			$statement = $pdo->prepare($sql);
			foreach($data as $key => $value){
				$statement->bindValue(":$key", $value, PDO::PARAM_STR);
				}
				$statement->execute();
		}		

}



 ?>