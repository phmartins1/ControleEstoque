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
							        <th>Cliente  </th>
							        <th>Celular </th>
									<th>editar </th>
							      </tr>
							    </thead>
							    <tbody>';
                                while($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                                    $id_cliente = $registro['id_cliente'];
                                    $fantasia = $registro['cli_fantasia'];
                                    $celular = $registro['cli_celular'];
                               echo '<tr>
                                        <td><h4>'.$id_cliente.'</h4></td>
                                        <td><h4>'.$fantasia.'</h4></td>
                                        <td><h4>'.$celular.'</h4></td>
										<td><button class="btn-edit" data-id="' . $id_cliente . '" data-fantasia="' . $fantasia . '"data-celular="' . $celular . '">Editar</button></td>
                                    </tr>
                                    ';
                                    };
        echo '                 </tbody>
                            </table>
                </div>';
     };
        

?>

<!-- o modal de alteração -->
<div id="editModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form id="editForm">
      <input type="hidden" id="edit-id" name="id">
      <label for="edit-fantasia">Fantasia:</label>
      <input type="text" id="edit-fantasia" name="fantasia"><br>
      <label for="edit-email">Email:</label>
      <input type="text" id="edit-email" name="email"><br>
      <button type="submit">Salvar Alterações</button>
    </form>
  </div>
</div>



<!-- javascript -->

document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("editModal");
    var span = document.getElementsByClassName("close")[0];
    var btns = document.getElementsByClassName("btn-edit");

    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function() {
            modal.style.display = "block";
            document.getElementById('edit-id').value = this.getAttribute('data-id');
            document.getElementById('edit-nome').value = this.getAttribute('data-nome');
            document.getElementById('edit-email').value = this.getAttribute('data-email');
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
