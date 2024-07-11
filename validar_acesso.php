<?php
	session_start();
	
	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = " SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link,$sql);

	if($resultado_id) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		//var_dump($dados_usuario);
		if(isset($dados_usuario['usuario'])){
			
			$_SESSION ['id_usuario'] = $dados_usuario['id_usuarios'];
			$_SESSION ['usuario'] = $dados_usuario['usuario'];
			$_SESSION ['email'] = $dados_usuario['email'];
			$_SESSION ['cargo'] = $dados_usuario['cargo'];
			$_SESSION ['adm'] = $dados_usuario['adm'];
			
		
			header('Location: home.php?1');

			
		} else {
			header('Location: index.php?erro=1');
		}

	} else {
		echo 'usuario não encontrado';
	}

?>