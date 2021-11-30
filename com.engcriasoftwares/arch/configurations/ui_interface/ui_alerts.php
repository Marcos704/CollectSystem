<?php


class UIAlerts{

    public function __construct(){

    }

    public function alertMenssage($titulo, $mensagem){
        echo "<div class='container'><div class='alert alert-warning' role='alert'><h4 class='alert-heading'>$titulo</h4><hr>$mensagem</div></div>";
    }
    public function successMenssage($titulo, $mensagem){
        echo "<div class='container'><div class='alert alert-success' role='alert'><h4 class='alert-heading'>$titulo</h4><hr>$mensagem</div></div>";
    }
    public function dangerMenssage($titulo, $mensagem){
        echo "<div class='container'><div class='alert alert-danger' role='alert'><h4 class='alert-heading'>$titulo</h4><hr>$mensagem</div></div>";
    }
}


?>