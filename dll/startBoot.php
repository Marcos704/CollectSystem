<?php
@session_start();
    require ("conection.php");
    require ("global.php");
    $query00 = $pdo->prepare("SELECT *FROM db_departamento_ti.tb_users");
    $query00->execute();
    $responser00 = $query00->fetchAll(PDO::FETCH_ASSOC);
    $registersFound = count($responser00);

    if($registersFound == 0){
        //Obtendo a senha hash para armazenar no banco 
        $default_password_user_hash = password_hash($default_password_user, PASSWORD_DEFAULT);
        $query01 = $pdo->prepare("INSERT INTO db_departamento_ti.tb_users (name_user, password_user, email_user, type_user, firstname_user, lastname_user, resp_cad_user, status_user, date_cad_user, time_cad_user) 
                                  VALUES ('{$default_name_user}', '{$default_password_user_hash}','{$default_email_user}', '{$default_type_user}', '{$default_firstname_user}', '{$default_lastname_user}', '{$default_resp_cad_user}', '{$default_status_user}', '{$default_date_cad_user}', '{$default_time_cad_user}')");
        if($query01->execute()){
            echo "<script>window.alert('### BOOT INICIAL ###\\n---Relatório de inicialização---\\n(00)-Banco de dados . . . : Ok\\n(01)-Serviços . . . : Ok\\n(02)-Arquivos de sistema . . . : Ok\\n---Finalizado com sucesso---\\nVerificar com o suporte do \\nsistema sobre os dados de login.\\nwww.engcriasoftwares.com.br');</script>";
        }else{
            echo "<script>window.alert('### BOOT INICIAL ###\\n---Relatório de inicialização---\\n(Fatal Erro)-Erro ao startar data.... contatar o administrador do sistema');</script>";
        }
       
    }

?>
