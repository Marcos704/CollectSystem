<?php
@session_start();
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
    <!-- Icons Header -->
    <link rel="shortcut icon" href="../../../vendor/assets/Logo.svg" type="image/x-icon">
    <link rel="icon" href="../../../vendor/assets/Logo.svg" type="image/x-icon">
    <!-- Estilos -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/coletor.css" type="text/css">
    <link href="../../../vendor/paineis/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Coletor</title>
</head>

<body class="bg-primary body">

    <div class="container">
        <div class="row">

            <div class="card-coletor">
                <img src="../vendor/assets/app_bar.png" width="425">
                <hr>
                <form method="post">
                    <h5 class="title text-center">CÓDIGO EAN</h5>
                    <div class="form-group">
                        <input type="text" class="input-ean text-center" autofocus name="eanProdutoPesquisa" id="inputEAN">
                        <h5>Código: 1234</h5>
                    </div>
                </form>
                <h5 class="title text-center">Informações Internas</h5>
                <h5 class="title-produto text-center">PISO ALMEIDA 30x30x45</h5>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Pço Var</th>
                            <td>12,33</td>
                            <th scope="row">Pço Prm</th>
                            <td>10,45</td>
                        </tr>
                        <tr>
                            <th scope="row">Pço Ata</th>
                            <td>10,99</td>
                            <th scope="row">Pço Pes</th>
                            <td>10,33</td>
                        </tr>
                    </tbody>
                </table>
                <h5 class="title text-center">Informações Pesquisa</h5>
                <form>
                    <div class="form-group">
                        <table class="table table-bordered margin-2">
                            <tbody>
                                <tr>
                                    <th class="mp-sm" scope="row">Pço.Var</th>
                                    <td>
                                        <input type="text" class="input-data" name="eanProdutoPesquisa">
                                    </td>
                                    <th class="mp-sm" scope="row">Pço.Prm</th>
                                    <td>
                                        <input type="text" class="input-data" name="eanProdutoPesquisa">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="mp-sm" scope="row">Pço.Ata</th>
                                    <td>
                                        <input type="text" class="input-data" name="eanProdutoPesquisa">
                                    </td>
                                    <th class="mp-sm" scope="row">Pço.Av</th>
                                    <td>
                                        <input type="text" class="input-data" name="eanProdutoPesquisa">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center p-2">
                                <button class="btn btn-lg btn-block btn-success btn-padding" type="submit">Salvar</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Custom scripts for all pages-->
    <script src="../../../vendor/paineis/js/sb-admin-2.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
        function FocusOnInput() {
            document.getElementById("inputEAN").focus();
        }
    </script>
</body>

</html>