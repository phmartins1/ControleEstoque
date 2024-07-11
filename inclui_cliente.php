<?php  
	
	/*session_start();

	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php?erro=1');
	}*/

	require_once('db.class.php');

	$cli_celular		= $_POST['cli_celular'];
	$cli_nome 			= $_POST['cli_nome'];
	$cli_razao			= $_POST['cli_razao'];
	$cli_email			= $_POST['cli_email'];
	$cli_end 			= $_POST['cli_end'];
	$cli_end_numero 	= $_POST['cli_end_numero'];
	$cli_complemento 	= $_POST['cli_complemento'];
	$cli_end_bairro		= $_POST['cli_end_bairro'];
	$cli_cep 			= $_POST['cli_cep'];
	$cli_cidade			= $_POST['cli_cidade'];
	$cli_estado			= $_POST['cli_estado'];
	$cli_nascimento		= $_POST['cli_nascimento'];
	$cli_apelido		= $_POST['cli_apelido'];
	$cli_categoria		= "PADRÃO";
	//$_POST['cli_categoria'];


	$data = date("Y-m-d",strtotime(str_replace('/','-',$cli_nascimento)));

	echo "nome: ".$cli_nome;
		
			$objDb = new db();
			$link = $objDb->conecta_mysql();

			//gravando CLIENTE
			$sql = " INSERT INTO clientes( cli_celular, cli_nome, cli_razao, cli_cep, cli_end, cli_end_numero, cli_end_bairro, cli_cidade, cli_estado, cli_complemento, cli_nascimento, cli_categoria, cli_email) VALUES ('$cli_celular', '$cli_apelido', '$cli_nome', '$cli_telefone', '$cli_cep', '$cli_end', '$cli_end_numero', '$cli_end_bairro', '$cli_cidade', '$cli_estado', '$cli_complemento', '$data', '$cli_categoria', '$cli_email') ";
			
			var_dump($sql);
			mysqli_query($link, $sql);

			//header('Location: home.php?erro=1');

?>
