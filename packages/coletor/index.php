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
    <link rel="shortcut icon" href="../../vendor/assets/Logo.svg" type="image/x-icon">
    <link rel="icon" href="../../vendor/assets/Logo.svg" type="image/x-icon">
    <!-- Estilos -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="vendor/coletor.css" type="text/css">
    <link href="../../vendor/paineis/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Coletor</title>
</head>

<body class="bg-primary body">
    <div class="container">
        <div class="row">
            <div class="card-coletor">
                <img src="vendor/assets/app_bar.png" width="420">
                <hr>
                <br>
                <div class="card-bordered">
                    <h3 class="title text-center">Login</h3>
                    <hr>
                    <?php
                    if (isset($_SESSION['loginResponser']) != null) {
                        echo $_SESSION['loginResponser'];
                        unset($_SESSION['loginResponser']);
                    }
                    ?>
                    <form method="POST" action="vendor/Scripts/login.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="razao_social">
                                    <h5 class="title-page">Usuário</h5>
                                </label>
                                <input type="text" class="input-padrao" name="userName" id="userName" placeholder="Nome de usuário" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="razao_social">
                                    <h5 class="title-page">Senha</h5>
                                </label>
                                <input type="password" class="input-padrao" name="userPassword" id="userPassword" placeholder="Senha" required />
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center p-2">
                                    <button class="btn btn-lg btn-block btn-success btn-padding" type="submit">Entrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <div class="title-footer">&copy; 2021 - engcriaSoftwares</div>

            </div>
        </div>
    </div>
    <!-- Custom scripts for all pages-->
    <script src="../../vendor/paineis/js/sb-admin-2.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>


</html>