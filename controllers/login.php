<?php
require ("../dll/conection.php");
//require ("../vendor/configurations/database/DBConnection.php");
@session_start();

$userData = $_POST['userData'];
$passwordData = $_POST['passwordData'];

$query00 = $pdo->prepare(("SELECT *FROM db_departamento_ti.tb_users WHERE name_user = '{$userData}'"));
if($query00->execute()){
    $responser00 = $query00->fetchAll(PDO::FETCH_ASSOC);
    $count00 = count($responser00);
    if($count00>0){
        $passwordBDHash = $responser00[0]['password_user'];
        if(password_verify($passwordData, $passwordBDHash)){
            //Obtendo o nivel do usuário
            $nivel = $responser00[0]['type_user'];
            /*
             *  Verificando e direcionando os usuários para os seus paineis
             * 
            */
            if($nivel == "master"){
                //redirecionando o usuairo master para o painel do suporte
                @$_SESSION['nivel'] = $responser00[0]['type_user'];
                @$_SESSION['id'] = $responser00[0]['id_user'];
                echo "<script>
                window.location='../painel-master/index.php?pag=dashboard'
                    </script>";
            }else{
                @$_SESSION['loginResponser'] = "<div class='alert alert-danger'><strong>Teste! </strong>Bem vindo adm</div>";
                header("Location: ../index.php");
            }
        }else{
            @$_SESSION['loginResponser'] = "<div class='alert alert-danger'><strong>Erro! </strong>Usuário ou senha inválidos</div>";
            header("Location: ../index.php");
        }
    }else{
        @$_SESSION['loginResponser'] = "<div class='alert alert-warning'><strong>Erro! </strong>Usuário ou senha inválidos</div>";
        header("Location: ../index.php");
    }
}else{
    @$_SESSION['loginResponser'] = "<div class='alert alert-danger'><strong>Erro Fatal! </strong>contatar o administrador do sistema</div>";
    header("Location: ../index.php");
}

?>