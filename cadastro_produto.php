  <div class="cad_prof container-contact100" name="produtos">
    <div class="wrap-contact100">
        <form method="POST" class="contact100-form validate-form" action="/inclui_produto.php">
        <span class="contact100-form-title">
          Cadastro de Produtos
        </span>

        <div class="wrap-input100 validate-input bg1" data-validate="precisa preencher a descrição">
          <span class="label-input100">Descrição: *</span>
          <input class="input100" type="text" name="prod_descricao" placeholder="Descrição do produto">
        </div>

        <div class="wrap-input100 bg1">
          <span class="label-input100">Preço de Custo:</span>
          <input class="input100" type="number" name="prod_custo" placeholder="Preço do produto" step="0.01">
        </div>

        <div class="wrap-input100 validate-input bg1" data-validate="precisa preencher a descrição">
          <span class="label-input100">Preço de Venda:</span>
          <input class="input100" type="number" name="prod_venda" placeholder="Preço de Venda" step="0.01">
        </div>

        <div class="wrap-input100 validate-input bg1" data-validate="precisa preencher a descrição">
          <span class="label-input100">Unidade de Medida: </span>
          <input class="input100" type="text" name="prod_medida" placeholder="UN">
        </div>
     
        <div class="container-contact100-form-btn">
          <input class="contact100-form-btn" type="submit">
            <span>
              Salvar
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </input>
        </div>
      </div>
    </form>
  </div>


