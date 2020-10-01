<?php 

class Conexao{

	public static $instancia;
	public static function getInstancia(){
		if(!isset(self::$instancia)){
			
			//Firebird
			//self::$instancia = new PDO('firebird:dbname=localhost:C:\xampp\htdocs\athenas\DB.FDB','SYSDBA','masterkey',

			//mySql
			self::$instancia = new PDO("mysql:host=localhost;dbname=athe;", "root","",
			 array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); //Atribuir padrão utf8 nos campos
			self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		return self::$instancia;
	}

}
 ?>