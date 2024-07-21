<?php  
	
	/*session_start();

	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php?erro=1');
	}*/

	require_once('db.class.php');

	$cli_celular		= $_POST['cli_celular'];
	$cli_fantasia		= $_POST['cli_fantasia'];
	$cli_razao			= $_POST['cli_razao'];
	$cli_nome 			= $_POST['cli_nome'];
	$cli_telefone		= $_POST['cli_telefone'];
	$cli_email			= $_POST['cli_email'];
	$cli_cep 			= $_POST['cli_cep'];
	$cli_endereco		= $_POST['cli_endereco'];
	$cli_end_numero 	= $_POST['cli_end_numero'];
	$cli_complemento 	= $_POST['cli_complemento'];
	$cli_end_bairro		= $_POST['cli_end_bairro'];
	$cli_cidade			= $_POST['cli_cidade'];
	$cli_estado			= $_POST['cli_estado'];
	$cli_nascimento		= $_POST['cli_nascimento'];
	$cli_ativo		= 1;
	//$_POST['cli_categoria'];


	$data = date("Y-m-d",strtotime(str_replace('/','-',$cli_nascimento)));

	echo "nome: ".$cli_nome;
		
			$objDb = new db();
			$link = $objDb->conecta_mysql();

			//gravando CLIENTE
			$sql = " INSERT INTO cliente( cli_celular, cli_fantasia, cli_razao, cli_nome, cli_telefone, cli_email, cli_cep, cli_endereco, cli_end_numero, cli_end_bairro, cli_cidade, cli_uf, cli_complemento, cli_data_nascimento, cli_ativo)
								VALUES ('$cli_celular', '$cli_fantasia', '$cli_razao', '$cli_nome', '$cli_telefone', '$cli_email', '$cli_cep', '$cli_endereco', '$cli_end_numero', '$cli_end_bairro', '$cli_cidade', '$cli_estado', '$cli_complemento', '$data', $cli_ativo) ";
			
			//var_dump($sql);
			mysqli_query($link, $sql);

			header('Location: home.php?erro=1');

?>
