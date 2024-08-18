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

    $objDb = new db();
	$link = $objDb->conecta_mysql();

	//lista de clientes
    $sql = " SELECT * FROM cliente ";
    $resultado = mysqli_query($link, $sql);

    if ($resultado) {
        echo '<div class="col-sm-8">
							<table class="table table-striped">
						    	<thead>
						          <tr>
							        <th>id </th>
							        <th>Cliente </th>
							        <th>Celular </th>
									<th>editar </th>
							      </tr>
							    </thead>
							    <tbody>';
                                while($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                                    $id_cliente = $registro['id_cliente'];
                                    $fantasia = $registro['cli_fantasia'];
                                    $celular = $registro['cli_celular'];
                                    $razao = $registro['cli_razao'];
                                    $nome = $registro['cli_nome'];
                               echo '<tr>
                                        <td><h4>'.$id_cliente.'</h4></td>
                                        <td><h4>'.$fantasia.'</h4></td>
                                        <td><h4>'.$celular.'</h4></td>
										<td><button class="btn-edit" 
                                                data-id="'.$id_cliente.'" 
                                                data-fantasia="'.$fantasia.'"
                                                data-celular="'.$celular.'"
                                                data-razao="'.$razao.'"
                                                data-nome="'.$nome.'"
                                                data-bs-toggle="modal" data-bs-target="#editModal">Editar</button></td>
                                    </tr>
                                    ';
                                    };
        echo '                 </tbody>
                            </table>
                </div>';
     };
        

?>

<!-- o modal de alteração -->
<div class="modal" id="editModal">
  <div class="modal-content">
    <span class="close">&times;</span>
     <!-- NOVA TENTATIVA FORMULARIO -->
     <div class="cad_cliente container-contact100" name="edit-cliente">
      <div class="wrap-contact100">
        <form method="POST" action="altera_cliente.php" class="contact100-form validate-form">
          <span class="contact100-form-title">
            Cadastro de Cliente
          </span>
          <div style="width:60%;" class="card mb-4 py-3 border-left-dark">
            <p id="edit-id"></p>
            <div class="marg1">
              <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Celular">
                <span class="label-input100">Celular: *</span><br>
                <input class="input100" type="text" name="cli_celular" id="edit-celular">
              </div>

              <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Nomefantasia">
                <span class="label-input100">Nome fantasia: *</span><br>
                <input class="input100" type="text" name="cli_fantasia" id="edit-fantasia">
              </div>

              <div class="wrap-input100 validate-input bg1">
                <span class="label-input100">Razão: *</span><br>
                <input class="input100" type="text" name="cli_razao" id="edit-razao">
              </div>

              <div class="wrap-input100 validate-input bg1">
                <span class="label-input100">Nome: *</span><br>
                <input class="input100" type="text" name="cli_nome" id="edit-nome">
              </div>
            </div>
          </div>
          <br><br><br>
    <!-- ATIVAR ESTES CAMPOS COMO OPÇÃO DE EDIÇÃO COMPLETA
          <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "um telefone">
            <span class="label-input100">Telefone: </span><br>
            <input class="input100" type="text" name="cli_telefone" placeholder="(DD) 9999-9999" id="telefone">
          </div>

          <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Entre com seu Email (e@a.x)">
            <span class="label-input100">Email: </span><br>
            <input class="input100" type="text" name="cli_email" placeholder="Entre com seu Email ">
          </div>

          <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
            <span class="label-input100">CEP: </span><br>
            <input class="input100" type="text" name="cli_cep" placeholder="CEP" id="cep" 
            onblur="pesquisacep(this.value);">
          </div>

          <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
            <span class="label-input100">Estado: </span><br>
            <input class="input100" type="text" name="cli_estado" id="uf" placeholder="SP">
          </div>

          <div class="wrap-input100 validate-input bg1">
            <span class="label-input100">Cidade: </span><br>
            <input class="input100" type="text" name="cli_cidade" id="cidade" placeholder="São José dos Campos">
          </div>

          <div class="wrap-input100 validate-input bg1">
            <span class="label-input100">Endereço: </span><br>
            <input class="input100" type="text" name="cli_endereco" id="rua" placeholder="Nome do logradouro">
          </div>

          <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
            <span class="label-input100">Número: </span><br>
            <input class="input100" type="text" name="cli_end_numero" >
          </div>

          <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
            <span class="label-input100">Complemento: </span><br>
            <input class="input100" type="text" name="cli_complemento" placeholder="Complemento">
          </div>

          <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
            <span class="label-input100">Bairro: </span><br>
            <input class="input100" type="text" name="cli_end_bairro" id="bairro" placeholder="Bairro">
          </div>

          <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
            <span class="label-input100">Data de nascimento: </span><br>
            <input class="input100" type="date" name="cli_nascimento" id="nascimento" >
          </div>
    -->
          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
              <span>
                Salvar
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>

      </div>
    </div>







    <!-- parte velha 
    <form method="POST" id="editForm" action="altera_cliente.php" class="contact100-form validate-form">
        <input type="text" id="edit-id" name="id">
        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Celular">
                <span class="label-input100">Fantasia: </span><br>
                <input class="input100" type="text" name="cli_fantasia" id="edit-fantasia" onblur="busca_cliente(this.value);">
        </div>
        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Celular">
                <span class="label-input100">Celular: </span><br>
                <input class="input100" type="text" name="cli_celular" placeholder="(DD) 99999-9999" id="edit-celular" onblur="busca_cliente(this.value);">
        </div>
        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
              <span>
                Salvar
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>

    </form>
    -->
  </div>
</div>




<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("editModal");
    var span = document.getElementsByClassName("close")[0];
    var btns = document.getElementsByClassName("btn-edit");

    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function() {
            modal.style.display = "block";
            document.getElementById('edit-id').value = this.getAttribute('data-id');
            document.getElementById('edit-fantasia').value = this.getAttribute('data-fantasia');
            document.getElementById('edit-celular').value = this.getAttribute('data-celular');
            document.getElementById('edit-razao').value = this.getAttribute('data-razao');
            document.getElementById('edit-nome').value = this.getAttribute('data-nome');
        };
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});



//codigo para enviar a gravação com Ajax
document.getElementById('editForm').onsubmit = function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('atualizar.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text())
      .then(result => {
          alert(result);
          location.reload(); // Recarrega a página para mostrar as alterações
      }).catch(error => {
          console.error('Erro:', error);
      });
};
</script>