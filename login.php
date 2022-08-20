<?php
	include_once 'conecta.php';
	$conn = new Conecta();

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$resultado = $conn->consulta_login($usuario, $senha);

	//$usuario = preg_replace('/[^[:alnum:]_.-]/','', $usuario);

	echo $usuario.' - '.$senha.'<br><br>';

	//$conn = mysqli_connect('localhost', 'root', '', 'aula19082022');

	//$sql = "SELECT * FROM usuario WHERE usuario='".$usuario."' AND senha='".$senha."'";

	echo $sql;

	//$query = mysqli_query($conn, $sql);
	//$resultado = mysqli_num_rows($query);

	if($resultado){
		echo '<h1>Login Efetuado com Sucesso</h1>';
	}else{
		echo '<h1>Falha no Login!!!</h1>';
	}
?>