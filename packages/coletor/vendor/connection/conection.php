<?php
require ("dll_dbconfig.php");
date_default_timezone_set('America/Sao_Paulo');
    try{
        $pdoColetor = new PDO("mysql:dbname=$dbname;host=$dbhost; charset=utf8", "$dbuserName","$dbpassword");
        $pdoColetor->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        //return $pdo;
        //$conn = mysqli_connect($dbhost, $dbuserName, $dbpassword, $dbname );->Para backup
    }catch(PDOException $execao){
        echo "<script>window.location='".$erroRouter."';</script>";
        /*echo '<pre>';
        echo $execao->getMessage();
        echo '</pre>'; 
        */
    }
?>