<?php 

	$erro_usuario 	= isset($_GET['erro_usuario']) 	? $_GET['erro_usuario'] : 0;
	$erro_email 	= isset($_GET['erro_email']) 	? $_GET['erro_email'] 	: 0;
 ?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>BLZ - Cad.Usuários</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<link href="estilo.css" rel="stylesheet">
	
	</head>

	<body>

	 
	    <div class="container">
	          
	      
	    </div>
	    	
	    	<br />
	    	<br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Faça o seu cadastro.</h3>
	    		<br />
				<form method="post" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored" autofocus/>
						<?php 
							if ($erro_usuario) {
								echo '<h6><font style ="color:#FF0000">Usuario já existe!</font></h6>';
							} 
						?>
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
						<?php 
							if ($erro_email) {
								echo '<h6><font style ="color:#FF0000">Email já existe!</font></h6>';
							} 
						?>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					<button type="submit" class="btn-custom btn-ouro">Cadastrar</button>
					<a href="index.php" class="btn-custom btn-ouro">Cancelar</a>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>