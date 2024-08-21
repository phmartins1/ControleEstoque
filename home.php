<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CE - Controle de Estoque</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <h4>CE</h4>
                </div>
                <div class="sidebar-brand-text mx-3">Controle<sup><i class="fa fa-barcode"></i></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fa fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu:
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-book"></i>
                    <span>Estoque</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-address-card"></i>
                    <span>Cadastro</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cadastrar:</h6>
                        <a class="collapse-item" href="#" onclick="showContent('cadastrocliente')">Clientes</a>
                        <a class="collapse-item" href="#" onclick="showContent('produtosContent')">Produtos</a>
                        <a class="collapse-item" href="#" onclick="showContent('cadastroUsuario')">Usuários</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-address-book"></i>
                    <span>Relatórios</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Consultar:</h6>
                        
                        <a class="collapse-item" href="#" onclick="showContent('listaClientes')">Clientes</a>
                        
                        <a class="collapse-item" href="#">Produtos</a>
                        <a class="collapse-item" href="#">Usuários</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    
                <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="index.html">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Sair</span>
                                <i class="fas fa-sign-out-alt"></i>
                            </a> 
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Dentro da pagina principal -->
                <div class="container-fluid">

                    <!-- Cadastros -->
                    <h1 class="h3 mb-4 text-gray-800">Bem-vindo ao seu sistema de controle de estoque</h1>

                    <!-- Conteúdo de CLIENTES -->    
                    <div id="cadastrocliente" class="main-content" style="display: none;">
                        <!-- Cadastro de Clientes -->
                        <?php include 'cadastro_cliente.php'; ?>
                    </div>
                    <!-- Conteúdo de Produtos -->
                    <div id="produtosContent" class="main-content" style="display: none;">
                        <!-- Cadastro de Produtos -->
                        <?php 
                            include 'cadastro_produto.php';
                        ?>
                    </div>
                    <!-- Conteúdo de Usuários -->
                    <div id="cadastroUsuario" class="main-content" style="display: none;">
                        <!-- Cadastro de user -->
                        <?php 
                            include 'cadastro_User.php';
                        ?>
                    </div>
                    <!-- lista de clientes -->
                    <div id="listaClientes" class="main-content" style="display: none;">
                        <!-- lista Clientes -->
                        <?php 
                            include 'lista_cliente.php';
                        ?>
                    </div>
                </div>
                

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="script.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>