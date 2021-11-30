<?php
require_once("../connection/conection.php");
@session_start();
$usuario = $_POST['userName'];
$passwordUser = $_POST['userPassword'];

$query00 = $pdoColetor->prepare(("SELECT *FROM db_departamento_ti.tb_users WHERE name_user = '{$usuario}'"));
if($query00->execute()){
    $responser00 = $query00->fetchAll(PDO::FETCH_ASSOC);
    $count00 = count($responser00);
    if($count00>0){
        $passwordBDHash = $responser00[0]['password_user'];
        if(password_verify($passwordUser, $passwordBDHash)){
            //Obtendo o nivel do usuário
            $nivel = $responser00[0]['type_user'];
            /*
             *  Verificando e direcionando os usuários para os seus paineis
             * 
            */
            if($nivel == "administrador"){
                //redirecionando o pesquisador para o painel de seleção de pesquisa
                @$_SESSION['nivel'] = $responser00[0]['type_user'];
                @$_SESSION['id'] = $responser00[0]['Id_user'];
                echo "<script> window.location='../../pages/selecionarPesquisa.php' </script>";
            }else{
                @$_SESSION['loginResponser'] = "dasdasdasdad";
                header("Location: ../../index.php");
            }
        }else{
            @$_SESSION['loginResponser'] = "<div class='alert-warning'>Usuário ou senha incorretos</div>";
                header("Location: ../../index.php");
        }
    }else{
        @$_SESSION['loginResponser'] = "<div class='alert-danger'>Preencha os campos abaixo</div>";
        header("Location: ../../index.php");
    }
}else{
    @$_SESSION['loginResponser'] = "<div class='alert-danger'>Erro no servidor</div>";
        header("Location: ../../index.php");
}


?>