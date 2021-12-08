<?php
require_once ("com.engcriasoftwares/arch/configurations/database/DBConnection.php");
$conexao = new DBConnection();
$conexao->connectionStart();
echo "ola";

?>