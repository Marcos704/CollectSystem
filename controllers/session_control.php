<?php

function session_adm($session_Local){
    if($session_Local != "administrador" || $session_Local == null){
        echo "<script> window.alert('*Cookies de sessão inválidos!\\n->Realize o login como administrador.');</script>";
        echo "<script>
        window.location='../index.php'
            </script>";
    }
}
function session_master($session_Local){
    if($session_Local != "master" || $session_Local == null){
        echo "<script> window.alert('*Cookies de sessão inválidos!\\n->Realize o login como administrador.');</script>";
        echo "<script>
        window.location='../index.php'
            </script>";
    }
}
function clean_cache_sessions(){
    @session_start();
    @session_destroy();
}

?>