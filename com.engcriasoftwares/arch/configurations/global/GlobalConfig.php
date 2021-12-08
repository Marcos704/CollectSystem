<?php
    require_once ("time.php");
    /*Dados das Empresa*/
    $nome_empresa = "Ribeiro Home Center";
    $url = "http://192.168.1.200/coleta/";
    $endereco_empresa = " Estr. de Ribamar, 58 - Maiobão, São José de Ribamar - MA, 65110-000";
    $telefone_empresa = "(98)3274-5086";
    $email_suport = "suporteti@rederibeiro.com.br";
    /*==============================================*/


    /*Variaveis de conexao dev */
    date_default_timezone_set('America/Sao_Paulo');
    //$dbhost = "127.0.0.1:3307";
    

    /*Variaveis de conexao prod 
    date_default_timezone_set('America/Sao_Paulo');
    $dbhost = "192.168.50.250:3307";
    $dbname = "db_departamento_ti";
    $dbuserName = "suport";
    $dbpassword = "swu@660031";
    */

    // Variaveis globais do sistema
        //#Variaveis padrões de login no sistema
        /*  As variaveis abaixo são para habilitar
        *  um usuário administrador para entrada no
        *  sistema.
        *   O ao efetuar o primerio loguin, o mesmo
        *  poderá realizar a troca da senha
        */
        $default_name_user = "engcriasoftwares";
        $default_password_user = "swu@660031";
        $default_email_user = "engcriasoftwares@engcria.com";
        $default_type_user = "administrador";
        $default_firstname_user = "engcria";
        $default_lastname_user = "softwares";
        $default_status_user = "ativo";
        $default_resp_cad_user = "engcriasoftwares";
        $default_time_cad_user = getCurrentTime();
        $default_date_cad_user = getCurrentDate();

    /*
        Variaveis de acesso padrão as rotinas do sistema
    */
        $router_adm ="routers-adm/";
        $router_master ="routers-master/";
    /*
    ---- Significados para os códigos do sistema
        --Códigos de erro
            --E001 -> Usuário com credenciais invalidas
        --Códigos de alerta
            --A001 -> Usuário autenticado
    */
?>