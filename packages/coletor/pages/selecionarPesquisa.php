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
                    <h5 class="title text-center">Seleção de Pesquisa</h5>
                    <div class="input-select">
                        <select>
                            <option selected>Selecione uma pesquisa</option>
                            <option>DotMat ltda</option>
                            <option>Potiguar ltda</option>
                        </select>
                    </div>
                </form>
                <hr>
                <small class="text-danger">*Após a seleção da pesquisa, escolha uma das opções abaixo.</small>
                <br><br>
                <form>
                    <div class="form-group">
                        <input type="hidden">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center p-2">
                                <button class="btn btn-sm btn-block btn-success btn-padding" type="submit">Avançar</button>
                            </div>
                            <div class="col-12 text-center p-2">
                                <button class="btn btn-sm btn-block btn-warning btn-padding" onclick="window.location.href ='verDetalhes.php?id=10'">Lista de produtos</button>
                            </div>
                            <div class="col-12 text-center p-2">
                                <button class="btn btn-lg btn-block btn-danger btn-padding" onclick="window.location.href='../vendor/Scripts/longOut.php'">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <div class="title-footer">&copy; 2021 - engcriaSoftwares</div>
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