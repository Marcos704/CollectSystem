<?php
//Importando os script de verificação 
@session_start();
require_once("../controllers/session_control.php");
require_once("../dll/conection.php");
require_once("../dll/classes/Usuario.php");
require_once("../dll/global.php");
require_once("../dll/time.php");

session_master(@$_SESSION['nivel']);
//variaveis para o menu
$pag = @$_GET["pag"];
$dashboard = "dashboard";
$menu1 = "c01"; // Cadastro de itens
$menu2 = "c02"; //Cadastro de códigos de barras
$menu3 = "c03"; //Cadastro de empresa
$menu4 = "c04"; //Cadastro de Fornecedores
$menu5 = "c05";
$menu6 = "c06";
$menu9 = "oc01";
$menu10 = "oc02";
$menu11 = "oc03";
$menu12 = "oc04";
$empty = "";

$usuario = new Usuario(@$_SESSION['id'], $pdo);

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0c0e75">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="EngcriaSoftwares">

    <title>Painel - Master</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/a943e04bb1.js" crossorigin="anonymous"></script>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../vendor/paineis/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/styles/custom.css" rel="stylesheet">

    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="../vendor/assets/Logo.svg" type="image/x-icon">
    <link rel="icon" href="../vendor/assets/Logo.svg" type="image/x-icon">
    <!-- BarCodeGenerate-->
    <script src="../vendor/scritps/barcode/JsBarcode.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!--
        <script src="../vendor/scritps/barcode/barcode.js" type="text/javascript"></script>
        <link href="../vendor/scritps/barcode/barcode.css" type="text/css" rel="stylesheet"/>
    -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-custom-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

                <div class="sidebar-brand-text mx-3">System Master</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading text-center">
                Módulos
            </div>
            <!-- Rotinas para o modulo estoque-->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?pag=<?php echo $dashboard ?>">
                    <i class="fas fa-home"></i>
                    <span>Painel Principal</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-warehouse"></i>
                    <span class="text-center">Estoque</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rotinas de cadastro:</h6>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu1 ?>"><strong>C01-</strong> Cadastro de<br> Itens Internos</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu2 ?>"><strong>C02-</strong> Cadastro de <br> Códigos de Barras</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu3 ?>"><strong>C03-</strong> Cadastro de <br> Empresa</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu4 ?>"><strong>C04-</strong> Cadastro de <br> Fornecedores</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu5 ?>"><strong>C05-</strong> Cadastro de <br> Usuários</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu6 ?>"><strong>ETQ01-</strong> Impressão de <br> Etiquetas</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu7 ?>"><strong>I01-</strong> Inventário</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu8 ?>"><strong>I02-</strong> Resumo de <br>Inventário</a>

                    </div>
                </div>
            </li>

            <!-- Rotinas para o modulo Orçamentos-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-file-signature"></i>
                    <span class="text-center">Orçamentos</span>
                </a>
                <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rotinas de orçamentos</h6>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu9 ?>"><strong>ORC01-</strong> Digitação de<br>novo Orçamentos</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu10 ?>"><strong>ORC02-</strong> Orçamentos<br>Aprovados</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu11 ?>"><strong>ORC03-</strong> Orçamentos<br>Pendentes</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu12 ?>"><strong>ORC04-</strong> Resumo<br>Geral</a>
                    </div>
                </div>
            </li>
            <!-- Rotinas para o modulo Serviços-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFor" aria-expanded="true" aria-controls="collapseFor">
                    <i class="fas fa-clipboard-list"></i>
                    <span class="text-center">Serviços</span>
                </a>
                <div id="collapseFor" class="collapse" aria-labelledby="headingFor" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rotinas de serviços</h6>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu13 ?>"><strong>SERV01-</strong> Cadastrar novo<br>serviço</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu14 ?>"><strong>SERV02-</strong> Serviços<br>Aprovados</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu15 ?>"><strong>SERV03-</strong> Serviços<br>Pendentes</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu16 ?>"><strong>SERV04-</strong> Resumo<br>Geral</a>
                    </div>
                </div>
            </li>
            <!-- Rotinas para o modulo Movimentações-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-clipboard-list"></i>
                    <span class="text-center">Movimentações</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rotinas de movimentação</h6>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu17 ?>"><strong>MV01-</strong> Emprestimo de<br>Item</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu18 ?>"><strong>MV02-</strong> Devolução de<br>Item Emprestado</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu19 ?>"><strong>MV03-</strong> Emprestimos em<br>Aberto</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu20 ?>"><strong>MV04-</strong> Emprestimos<br>com Atraso</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu21 ?>"><strong>MV05-</strong> Emprestimos<br>Realizados</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu22 ?>"><strong>MV06-</strong> Resumo<br>Geral</a>
                    </div>
                </div>
            </li>
            <!-- Rotinas para o modulo Relatórios-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSex" aria-expanded="true" aria-controls="collapseSex">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="text-center">Coleta de dados</span>
                </a>
                <div id="collapseSex" class="collapse" aria-labelledby="headingSex" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rotinas</h6>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu23 ?>"><strong>CD01-</strong>Status geral</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu24 ?>"><strong>CD02-</strong>Andamento das<br>coletas</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu24 ?>"><strong>CD03-</strong>Adicionar nova<br>coletas</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu24 ?>"><strong>CD04-</strong>Cadastro de<br>Pesquisadores</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu24 ?>"><strong>CD05-</strong>Cadastro de<br>Analistas</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu24 ?>"><strong>CD06-</strong>Cadastro de<br>Coletores</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu24 ?>"><strong>CD07-</strong>Cadastro de<br>Concorrentes</a>
                        <h6 class="collapse-header">Relatórios</h6>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu25 ?>"><strong>CDR01-</strong>Resumo das <br>coletas realizadas</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu26 ?>"><strong>CDR02-</strong>Rel. Coletores<br>cadastrados</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu27 ?>"><strong>CDR03-</strong>Rel. Analistar<br>cadastrados</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu28 ?>"><strong>-</strong>Resumo<br>Geral</a>
                    </div>
                </div>
            </li>
            <!-- Rotinas para o modulo Relatórios-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    <i class="fas fa-print"></i>
                    <span class="text-center">Relatórios</span>
                </a>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rotinas de gerenciais</h6>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu29 ?>"><strong>MV01-</strong>Emprestimo de<br>Item</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu30 ?>"><strong>MV02-</strong>Devolução de<br>Item Emprestado</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu31 ?>"><strong>MV03-</strong>Emprestimos em<br>Aberto</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu32 ?>"><strong>MV04-</strong>Emprestimos<br>com Atraso</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu33 ?>"><strong>MV05-</strong>Emprestimos<br>Realizados</a>
                        <a class="collapse-item" href="index.php?pag=<?php echo $menu34 ?>"><strong>MV06-</strong>Resumo<br>Geral</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Tables -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <img class="mt-2" src="../vendor/assets/nameLogo.svg" width="150">



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $usuario->getNameUser(); ?></span>
                                <img class="img-profile rounded-circle" src="../vendor/paineis/img/sem-foto.jpg">

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#ModalPerfil">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                                    Editar Perfil
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../dll/longOff.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-2 pt-1 m-0">

                    <?php
                    if (@$pag == null) {

                        @include_once("dashboard.php");

                    } else if (@$pag == $dashboard) {

                        @include_once(@$router_master . @$dashboard . ".php");

                    } else if (@$pag == $menu1) {

                        @include_once(@$router_master . @$menu1 . ".php");

                    } else if (@$pag == $menu2) {

                        @include_once(@$router_master . @$menu2 . ".php");

                    } else if (@$pag == $menu3) {

                        @include_once(@$router_master . @$menu3 . ".php");

                    } else if (@$pag == $menu4) {

                        @include_once(@$router_master . @$menu4 . ".php");

                    } else if (@$pag == $menu5) {

                        @include_once(@$router_master . @$menu5 . ".php");

                    } else if (@$pag == $menu6) {

                        @include_once(@$router_master . @$menu6 . ".php");

                    } else if (@$pag == $menu9) {

                        @include_once(@$router_master . @$menu9 . ".php");

                    } else if (@$pag == $menu10) {

                        @require_once(@$router_master . @$menu10 . ".php");

                    } else if (@$pag == $menu11) {

                        @require_once(@$router_master . @$menu11 . ".php");

                    } else if (@$pag == $menu12) {

                        @require_once(@$router_master . @$menu12 . ".php");

                    } else {

                        @include_once(@$router_master . "dashboard.php");

                    }
                    ?>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <br>
            <div class="row pt-10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="text-center">
                                        <th scope="row">US: <small class="text-center"><?php echo $usuario->getNameUser(); ?></small></th>
                                        <th scope="row">IPS: <small><?php echo $dbhost ?></small></th>
                                        <th scope="row">IPC: <small><?php echo $_SERVER['REMOTE_ADDR'] ?></small></th>
                                        <th scope="row">STATUS: <small><?php echo $usuario->getStatusUser() ?></small></th>
                                        <th scope="row">DATE: <small><?php echo getCurrentDate(); ?></small></th>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




    <!--  Modal Perfil-->
    <div class="modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>



                <form id="form-perfil" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="row">
                            <div class="container">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input value="<?php echo $nome ?>" type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                                    </div>

                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input value="<?php echo $cpf ?>" type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input value="<?php echo $email ?>" type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input value="" type="password" class="form-control" id="text" name="senha" placeholder="Senha">
                                    </div>
                                </div>
                            </div>



                            <small>
                                <div id="mensagem" class="mr-4">

                                </div>
                            </small>



                        </div>
                        <div class="modal-footer">



                            <input value="<?php echo $idUsuario ?>" type="hidden" name="txtid" id="txtid">
                            <input value="<?php echo $cpf ?>" type="hidden" name="antigo" id="antigo">

                            <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" name="btn-salvar-perfil" id="btn-salvar-perfil" class="btn btn-primary">Salvar</button>
                        </div>
                </form>


            </div>
        </div>
    </div>


    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../vendor/paineis/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../vendor/paineis/js/demo/chart-area-demo.js"></script>
    <script src="../vendor/paineis/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../vendor/paineis/js/demo/datatables-demo.js"></script>



</body>

</html>