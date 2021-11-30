<?php
/**
 * - Marcos Rocha 24/11/2021
 * Classe para conexão com o banco de dados MySQL para
 * o uso do sistema CollectSystem
 */
/**Import ui_alerts */
include ("vendor/configurations/ui_interface/ui_alerts.php");

class DBConnection {
    private $dbhost = "127.0.0.1";
    private $dbname = "db_departamento_ti";
    private $dbuserName = "suport";
    private $dbpassword = "swu@660031";
    private $conexao;
    private $uiInterface;
    

    public function __construct() {
        date_default_timezone_set("America/Sao_Paulo");
        $this->uiInterface = new UIAlerts();
        try{
            $this->conexao = new PDO("mysql:dbname=$this->dbname;
                                            host=$this->dbhost;
                                            charset=utf8",
                                            "$this->dbuserName",
                                            "$this->dbpassword");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            $this->uiInterface->dangerMenssage($e->getCode(), $e->getMessage());
        }
    }

    public function connectionStart() {
       return $this->conexao;
    }
    public function closeConnection() {
        return $this->conecao = null;
    }

    public function getDBHost() {
        return $this->dbhost;
    }
    public function getDBName() {
        return $this->dbname;
    }
    public function getDBUser() {
        return $this->dbuserName;
    }
    public function getDBPassword() {
        return $this->dbpassword;
    }

}
?>