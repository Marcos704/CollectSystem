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
                    <p><strong>Cadastro Simplificado de Empresa</strong></p>
                </div>
            </div>
            <div class="section">
                <form>
                    <label for="infor_cad_prod">Informações (descritivas)</label>
                    <div class="box-form-control" id="infor_cad_prod">

                        <div class="box-form-control">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="razao_social">Razão Solical</label>
                                    <input type="text" class="form-control form-control-cad" id="razao_social">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fantasia">Fantasia</label>
                                    <input type="text" class="form-control form-control-cad" id="fantasia">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" class="form-control form-control-cad text-center" id="cnpj">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="insc_estadual">Insc. Estadual</label>
                                    <input type="text" class="form-control form-control-cad text-center" id="insc_estadual">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control form-control-cad text-center" id="cep">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="uf">UF</label>
                                    <input type="text" class="form-control form-control-cad text-center" id="uf">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control form-control-cad text-center" id="endereco">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control form-control-cad text-center" id="bairro">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control form-control-cad text-center" id="cidade">
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="form-row">
                            <div class="col-md-6">
                                <p class="text-center">Contatos</p>
                                <div class="box-form-control" id="infor_cad_prod">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="telefone_a_contato">Telefone (A)</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="telefone_a_contato">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="telefone_a_contato">Telefone (B)</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="telefone_a_contato">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="whatsapp_contato">Whatsapp</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="grupo">
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