<!DOCTYPE html>
<html lang="pt">

<head>
<title>Lider</title>

<!-- trecho do Pedro -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lider</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- trecho do Pedro até aqui-->

</head>
<body>

<h2>Sistema lider</h2>
<p>Bem vindo ao sistema de controle de negócios, simples e seguro, rápido e fácil</p>
<p>Controle seu negócio sem burocracia!</p>

<div class="header">
  <h2>Lider</h2>
    <h6>Jesus manso e humilde de coração.Fazei o nosso coração semelhante ao Vosso!</h6>
</div>

<div class="row">

            <div class="column side w3-light-green w3-card">
                <h4>Menu</h4>
                <a href="#" class="w3-bar-item w3-button" onclick="hideAllContent()">Home</a>
                <button class="w3-button w3-block w3-left-align" onclick="toggleSection('cadastroClientes')">Cadastro <i class="fa fa-caret-down"></i></button>
                <div id="cadastroClientes" class="w3-hide w3-light-green w3-card">
                    <a href="#" class="w3-bar-item w3-button" onclick="showContent('clientesContent')">Clientes</a>
                    <a href="#" class="w3-bar-item w3-button" onclick="showContent('produtosContent')">Produtos</a>
                </div>
                <button class="w3-button w3-block w3-left-align" onclick="toggleSection('estoque')">Estoque <i class="fa fa-caret-down"></i></button>
                <div id="estoque" class="w3-hide w3-light-green w3-card">
                    <a href="#" class="w3-bar-item w3-button" onclick="showContent('entradaContent')">Entrada</a>
                    <a href="#" class="w3-bar-item w3-button" onclick="showContent('saidaContent')">Saída</a>
                </div>
            </div>

    <!--<div class="main-content-container" style="margin-left:20%;">-->
    <div id="clientesContent" class="main-content">
          <!-- Conteúdo de Clientes -->
          
          <?php 
      	    include 'cadastro_cliente.php';
          ?>
    </div>
      
      <div id="produtosContent" class="main-content">
          <!-- Cadastro de Produtos -->

          <?php 
      	    include 'cadastro_produto.php';
          ?>
      </div>

      <div id="entradaContent" class="main-content">
          <!-- Conteúdo de Entrada -->
          <form>
              <div class="form-container">
                  <div class="form-column">
                      <label for="entryDate">Entry Date</label>
                      <input type="date" id="entryDate" name="entryDate">
                  </div>
                  <div class="form-column">
                      <label for="quantity">Quantity</label>
                      <input type="number" id="quantity" name="quantity" value="0">
                  </div>
              </div>
          </form>
      </div>

      <div id="saidaContent" class="main-content">
          <!-- Conteúdo de Saída -->
          <form>
              <div class="form-container">
                  <div class="form-column">
                      <label for="exitDate">Exit Date</label>
                      <input type="date" id="exitDate" name="exitDate">
                  </div>
                  <div class="form-column">
                      <label for="quantityOut">Quantity</label>
                      <input type="number" id="quantityOut" name="quantityOut" value="0">
                  </div>
              </div>
          </form>
      </div>







  <div class="column middle" style="background-color:#bbb;">dashboard</div>
  <div class="column side" style="background-color:#ccc;">novidades</div>
</div>

<div class="footer">
  <p>um negócio de família</p>
</div>


<script src="script.js"></script>
          
        <div class="main-content-container" style="margin-left:20%;">
            <div id="clientesContent" class="main-content">
                <!-- Conteúdo de Clientes -->
                <form>
                    <div class="form-container">
                        <div class="form-column">
                            <label for="fname">Nome completo:</label>
                            <input type="text" id="nome" name="nome" value="">
                        </div>
                        <div class="form-column">
                            <label for="cpf">CPF:</label>
                            <input type="text" id="cpf" name="cpf" value="000.000.000-00">
                        </div>
                        <div class="form-column">
                            <label for="dataNasc">Data de nascimento:</label>
                            <input type="date" id="dataNasc" name="dataNasc">
                        </div>
                    </div>
                </form>
            </div>
            
            <div id="produtosContent" class="main-content">
                <!-- Conteúdo de Produtos -->
                <form>
                    <div class="form-container">
                        <div class="form-column">
                            <label for="pname">Product Name</label>
                            <input type="text" id="pname" name="pname" value="Widget">
                        </div>
                        <div class="form-column">
                            <label for="pcode">Product Code</label>
                            <input type="text" id="pcode" name="pcode" value="1234">
                        </div>
                    </div>
                </form>
            </div>
    
            <div id="entradaContent" class="main-content">
                <!-- Conteúdo de Entrada -->
                <form>
                    <div class="form-container">
                        <div class="form-column">
                            <label for="entryDate">Entry Date</label>
                            <input type="date" id="entryDate" name="entryDate">
                        </div>
                        <div class="form-column">
                            <label for="quantity">Quantity</label>
                            <input type="number" id="quantity" name="quantity" value="0">
                        </div>
                    </div>
                </form>
            </div>
    
            <div id="saidaContent" class="main-content">
                <!-- Conteúdo de Saída -->
                <form>
                    <div class="form-container">
                        <div class="form-column">
                            <label for="exitDate">Exit Date</label>
                            <input type="date" id="exitDate" name="exitDate">
                        </div>
                        <div class="form-column">
                            <label for="quantityOut">Quantity</label>
                            <input type="number" id="quantityOut" name="quantityOut" value="0">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>


