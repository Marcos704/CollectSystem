<?php

class Usuario{
    private $id;
    private $email;
    private $firstname;
    private $lastname;
    private $nameUser;
    private $passwordUser;
    private $typeUser;
    private $resp_cad_user;
    private $status_user;
    private $date_cad_user;
    private $time_cad_user;

    public function __construct($idUser, PDO $conection){
        $query = $conection ->prepare("SELECT *FROM  db_departamento_ti.tb_users WHERE id_user = '{$idUser}'");
        if($query->execute()){
            $responser = $query->fetchAll(PDO::FETCH_ASSOC);
            $this->id = $responser[0]['id_user'];
            $this->email = $responser[0]['email_user'];
            $this->firstname = $responser[0]['firstname_user'];
            $this->lastname = $responser[0]['lastname_user'];
            $this->nameUser = $responser[0]['name_user'];
            $this->passwordUser = $responser[0]['password_user'];
            $this->typeUser = $responser[0]['type_user'];
            $this->resp_cad_user = $responser[0]['resp_cad_user'];
            $this->status_user = $responser[0]['status_user'];
            $this->date_cad_user = $responser[0]['date_cad_user'];
            $this->time_cad_user = $responser[0]['time_cad_user'];
            
        }else{
            $this->id = null;
            $this->email = null;
            $this->firstname = null;
            $this->lastname = null;
            $this->nameUser = null;
            $this->passwordUser = null;
            $this->typeUser = null;
            $this->resp_cad_user = null;
            $this->status_user = null;
            $this->date_cad_user =null;
            $this->time_cad_user = null;
        }
    }

    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getFistName(){
        return $this->firtname;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function getNameUser(){
        return $this->nameUser;
    }
    public function getTypeUser(){
        return $this->typeuser;
    }
    public function getRespCad(){
        return $this->resp_cad_user;
    }
    public function getStatusUser(){
        return $this->status_user;
    }
    public function getDateCad(){
        return $this->date_cad_user;
    }
    public function getTimeCad(){
        return $this->time_cad_user;
    }
}


?>