<?php
//Import necessario
require_once("../dll/time.php");
require_once("../dll/classes/Usuario.php");
require_once("../dll/conection.php");

$usuario = new Usuario(@$_SESSION['id'], $pdo);
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-center">
                    <p><strong>Cadastro Simplificado de Usuários</strong></p>
                </div>
            </div>
            <div class="section">
                <form>
                    <label for="infor_cad_prod">Informações (descritivas)</label>
                    <div class="box-form-control" id="infor_cad_prod">

                        <div class="box-form-control">

                            <div class="form-row text-center">
                                <div class="form-group col-md-4">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control form-control-cad" id="nome">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sobrenome">Sobrenome</label>
                                    <input type="text" class="form-control form-control-cad" id="sobrenome">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control form-control-cad text-center" id="email">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-row">
                            <div class="col-md-6">
                                <p class="text-center">Dados de login</p>
                                <div class="box-form-control" id="infor_cad_prod">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="nome_usuario">Nome de usuário</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="nome_usuario">
                                        </div>
                                        <div class="form-group col-md-7">
                                            <label for="senha">Senha</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="senha">
                                        </div>
                                    </div>
                                    <div class="form-row text-center">
                                        <div class="form-group col-md-12 text-center">
                                            <label for="nivel_acesso">Nivel de acesso</label>
                                            <select id="nivel_acesso" class="form-control form-control-cad">
                                                <option>Administrador</option>
                                                <option>Tecnico</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <p class="text-center">Resp. Cadastro</p>
                                <div class="box-form-control" id="infor_cad_prod">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="usuario_cadastro" class="text-center">Usuário</label>
                                            <input type="text" class="form-control form-control-cad text-center" value="<?php echo $usuario->getNameUser() ?>" id="usuario_cadastro" disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="status" class="text-center">Status</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="status" value="null" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="data_cadastro">Data de cadastro</label>
                                            <input type="text" class="form-control form-control-cad text-center" value="<?php echo getCurrentDate() ?>" id="data_cadastro" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="data_cadastro">Hora de cadastro</label>
                                            <input type="text" class="form-control form-control-cad text-center" value="<?php echo getCurrentTime() ?>" id="data_cadastro" disabled>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-right p-2">
                                    <button class="btn btn-success" type="submit">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>