<?php 

class db {

	//host
	private $host = 'localhost';

	//usuario
	private $usuario = 'root';

	//senha
	private $senha = '';

	//banco de dados
	private $database = 'livrocaixa';


	public function conecta_mysql(){

		//criar a conexão
		$conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		mysqli_set_charset($conexao, 'utf8');

		//verificacao da conexão

		if(mysqli_connect_errno()) {
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
		}

		return $conexao;
	}
}

 ?>