<?php
@session_start();
//require("dll/startBoot.php");
/*require("vendor/configurations/database/DBConnection.php");

$con = new DBConnection();
$con->connectionStart();
//
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CollectSystem</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0c0e75">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="com.engcriasoftwares/template/assets/Logo.svg" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="com.engcriasoftwares/template/styles/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="com.engcriasoftwares/template/styles/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="com.engcriasoftwares/template/styles/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="com.engcriasoftwares/template/styles/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="com.engcriasoftwares/template/styles/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="com.engcriasoftwares/template/styles/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="com.engcriasoftwares/template/styles/login/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            if (isset($_SESSION['loginResponser']) != null) {
                                echo $_SESSION['loginResponser'];
                                unset($_SESSION['loginResponser']);
                            }
                            ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-xl-7">
                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="com.engcriasoftwares/template/styles/login/images/img-01.png" alt="IMG">
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <form class="login100-form validate-form" action="controllers/login.php" method="POST">
                                <span class="login100-form-title">
                                    <img src="com.engcriasoftwares/template/assets/Logo.svg" width="25"><br>CollectSystem
                                </span>

                                <div class="wrap-input100 validate-input" data-validate="Digite um email válido: ex@abc.xyz">
                                    <input class="input100" type="text" name="userData" placeholder="Usuário ou Email">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Digite uma senha válida">
                                    <input class="input100" type="password" name="passwordData" placeholder="Senha">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn" type="submit">
                                        Entrar
                                    </button>
                                </div>

                                <div class="text-center p-t-12">
                                    <span class="txt1">
                                        Esqueceu
                                    </span>
                                    <a class="txt2" href="#">
                                        Usuário / Senha?
                                    </a>
                                </div>
                            </form>
                        </div>

                    </div>
                    <br><br>
                    <div class="row">
                        <div class="container">
                            <div class="row align-items-center justify-content-xl-between">
                                <div class="col-xl-6">
                                    <div class="copyright text-center text-xl-left text-muted">
                                        &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">EngCriaSoftwares</a>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" target="_blank">Time EngCria</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" target="_blank">Sobre nós</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" target="_blank">v-dev0.0.1</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="com.engcriasoftwares/template/styles/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="com.engcriasoftwares/template/styles/login/vendor/bootstrap/js/popper.js"></script>
    <script src="com.engcriasoftwares/template/styles/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="com.engcriasoftwares/template/styles/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="com.engcriasoftwares/template/styles/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
</body>

</html>