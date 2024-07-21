<?php

/*session_start();

	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php?erro=1');
	}
*/

	require_once('db.class.php');

	//pra data ficar em portugues
	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set('America/Sao_Paulo');

	//$id_usuario = $_SESSION['id_usuario'];
	//$usuario = $_SESSION['usuario'];
	$exibir_inativo = 'none';
	$t_pendentes = 0;
	$t_atendendo = 0;
	$t_abertas	 = 0;
	$t_minhas	 = 0;

    $objDb = new db();
	$link = $objDb->conecta_mysql();

	//lista de clientes
	$sql = " SELECT id_cliente, cli_fantasia, cli_celular FROM cliente ";

    $lista_cliente = mysqli_query($link, $sql);
				 
				while ( $usuarios = mysqli_fetch_array($lista_cliente, MYSQLI_ASSOC)) {
					echo '<div class="" id="tarefa_'.$registro['id_tarefa'].'">';
				}

?>