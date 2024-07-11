  <div class="cad_cliente container-contact100" name="cliente">
    <div class="wrap-contact100">
      <form method="POST" action="inclui_cliente.php" class="contact100-form validate-form">
        <span class="contact100-form-title">
          Cadastro de Cliente
        </span>


        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Celular">
          <span class="label-input100">Celular: *</span>
          <input class="input100" type="text" name="cli_celular" placeholder="(DD) 99999-9999" id="celular" onblur="busca_cliente(this.value);">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Nomefantasia">
          <span class="label-input100">Nome fantasia: *</span>
          <input class="input100" type="text" name="cli_Nomefantasia" placeholder="Nomefantasia" id="cli_Nomefantasia">
        </div>

        <div class="wrap-input100 validate-input bg1" data-validate="precisa preencher a razão social">
          <span class="label-input100">Razão: *</span>
          <input class="input100" type="text" name="cli_razao" placeholder="Entre com a Razão Social">
        </div>

        <div class="wrap-input100 validate-input bg1" data-validate="precisa preencher o nome">
          <span class="label-input100">Nome: *</span>
          <input class="input100" type="text" name="cli_nome" placeholder="Entre com seu nome">
        </div>

        <br><br><br>
        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "um telefone">
          <span class="label-input100">Telefone: </span>
          <input class="input100" type="text" name="cli_telefone" placeholder="(DD) 9999-9999" id="telefone">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Entre com seu Email (e@a.x)">
          <span class="label-input100">Email: </span>
          <input class="input100" type="text" name="cli_email" placeholder="Entre com seu Email ">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Cep: </span>
          <input class="input100" type="text" name="cli_cep" placeholder="Cep" id="cep" 
          onblur="pesquisacep(this.value);">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Estado: </span>
          <input class="input100" type="text" name="cli_estado" id="uf" placeholder="SP">
        </div>

        <div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Cidade: </span>
          <input class="input100" type="text" name="cli_cidade" id="cidade" placeholder="São José dos Campos">
        </div>

        <div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Endereço: </span>
          <input class="input100" type="text" name="cli_end" id="rua" placeholder="Nome do logradouro">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Numero: </span>
          <input class="input100" type="text" name="cli_end_numero" >
        </div>

      	<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Complemento: </span>
          <input class="input100" type="text" name="cli_complemento" placeholder="Complemento">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Bairro: </span>
          <input class="input100" type="text" name="cli_end_bairro" id="bairro" placeholder="Bairro">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Data de nascimento: </span>
          <input class="input100" type="date" name="cli_nascimento" id="nascimento" >
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
    </div>
  </div>
