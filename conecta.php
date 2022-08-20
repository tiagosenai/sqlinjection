<?php
	include_once 'conexao.php';

	class Conecta extends Conexao{
		var $pdo;

		function __construct(){
			$this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->bd, $this->usuario, $this->senha);
		}

		function consulta_login($usuario, $senha){
			$stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE usuario = :usuario AND senha = :senha");
			$stmt->bindValue(":usuario", $usuario);
			$stmt->bindValue(":senha", $senha);
			$sql = $stmt->execute();
			$resultado = $stmt->FetchAll(PDO::FETCH_ASSOC);
			return $resultado;
		}
	}
?>