<?php
//Import necessario
require_once("../dll/time.php");
require_once("../dll/classes/Usuario.php");
require_once("../dll/conection.php");

$usuario = new Usuario(@$_SESSION['id'], $pdo);
?>

<div class="container p-0">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-center">
                    <p><strong>Cadastro Simplificado de Itens Internos</strong></p>
                    <div id="alert-form"></div>
                </div>
            </div>
            <div class="section">
                <form method="POST" enctype="multipart/form-data" id="cadastrar-item">
                    <label for="infor_cad_prod">Informações (descritivas)</label>
                    <div class="box-form-control" id="infor_cad_prod">

                        <div class="box-form-control">

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="descricao_longa">Descrição Longa</label>
                                    <input type="text" class="form-control form-control-cad" id="descricao_longa" name="descricao_longa" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="descricao">Descrição</label>
                                    <input type="text" class="form-control form-control-cad" id="descricao" name="descricao" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gondula">Gondula</label>
                                    <input type="text" class="form-control form-control-cad" id="gondula" name="gondula" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="barras_ean">Barras EAN</label>
                                    <input type="number" class="form-control form-control-cad text-center" id="barras_ean" name="barras_ean" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="codigo_reduzido">Código Reduzido</label>
                                    <input type="number" class="form-control form-control-cad text-center" id="codigo_reduzido" name="codigo_reduzido" required>
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="form-row">
                            <div class="col-md-4">
                                <p class="text-center">Categorias</p>
                                <div class="box-form-control" id="infor_cad_prod">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fabricante">Fabricante</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="fabricante" name="fabricante" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="marca">Marca</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="marca" name="marca" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="grupo">Grupo</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="grupo" name="grupo" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tipo">Tipo</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="tipo" name="tipo" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <p class="text-center">Resp. Cadastro</p>
                                <div class="box-form-control" id="infor_cad_prod">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="usuario_cadastro" class="text-center">Usuário</label>
                                            <input type="text" class="form-control form-control-cad text-center" value="<?php echo $usuario->getNameUser() ?>" disabled>
                                            <input type="hidden" type="text" class="form-control form-control-cad text-center" value="<?php echo $usuario->getNameUser() ?>" id="usuario_cadastro" name="usuario_cadastro">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="status" class="text-center">Status</label>
                                            <input type="text" class="form-control form-control-cad text-center" value="null" disabled>
                                            <input type="hidden" type="text" class="form-control form-control-cad text-center" id="status" name="status" value="null">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="data_cadastro">Data de cadastro</label>
                                            <input type="text" class="form-control form-control-cad text-center" value="<?php echo getCurrentDate() ?>" disabled>
                                            <input type="hidden" type="text" class="form-control form-control-cad text-center" value="<?php echo getCurrentDate() ?>" id="data_cadastro" name="data_cadastro" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="hora_cadastro">Hora de cadastro</label>
                                            <input type="text" class="form-control form-control-cad text-center" value="<?php echo getCurrentTime() ?>" disabled>
                                            <input type="hidden" type="text" class="form-control form-control-cad text-center" value="<?php echo getCurrentTime() ?>" id="hora_cadastro" name="hora_cadastro">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="text-center">Produto</p>
                                <div class="box-form-control" id="infor_cad_prod">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="estoque_minimo_permitido" class="text-center">Estoq. min</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="estoque_minimo_permitido" name="estoque_minimo_permitido" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="valor" class="text-center">Valor(compra)</label>
                                            <input type="text" class="form-control form-control-cad text-center" id="valor" name="valor" required>
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

<!-- Ajax -->
<script type="text/javascript">
    //cache
    var campoDescricaoLonga = document.getElementById("descricao_longa");
    var descricao = document.getElementById("descricao");
    var gondula = document.getElementById("gondula");
    var barras_ean = document.getElementById("barras_ean");
    var codigo_reduzido = document.getElementById("codigo_reduzido");
    var fabricante = document.getElementById("fabricante");
    var marca = document.getElementById("marca");
    var grupo = document.getElementById("grupo");
    var tipo = document.getElementById("tipo");
    var estoque_minimo_permitido = document.getElementById("estoque_minimo_permitido");
    var valor = document.getElementById("valor");

    $("#cadastrar-item").submit(function(){
       event.preventDefault();
       var formData = new FormData(this);
       
       $.ajax({
           url: "../controllers/cadastrarNovoItem.php",
           type: 'POST',
           data: formData,

           success: function (retorno){
               $('#alert-form').removeClass()
               if(retorno.trim() == "requestSucessfull"){
                  // window.location = "index.php?pag=c01";
                   $('#alert-form')
                   .addClass('alert alert-success')
                   .html('<strong>Informações Enviadas</strong><br><strong>Status.: </strong>'+retorno);
                   /*Limpando os campos preenchidos*/
                   campoDescricaoLonga.value ='';
                   descricao.value ='';
                   gondula.value ='';
                   barras_ean.value ='';
                   codigo_reduzido.value ='';
                   fabricante.value ='';
                   marca.value ='';
                   grupo.value ='';
                   tipo.value ='';
                   estoque_minimo_permitido.value ='';
                   valor.value ='';
                   //campoDescricaoLonga.className = "form-control is-invalid";
               }else{
                   $('#alert-form')
                   .addClass('alert alert-danger')
                   .html('<strong>Não foi possivel enviar as informações</strong><br><strong>Status.: </strong>'+retorno);
                   //window.location = "index.php?pag=editar-Perfil";
                   campoDescricaoLonga.className = "form-control is-invalid text-center";
                   descricao.className = "form-control is-invalid text-center";
                   gondula.className = "form-control is-invalid text-center";
                   barras_ean.className = "form-control is-invalid text-center";
                   codigo_reduzido.className = "form-control is-invalid text-center";
                   fabricante.className = "form-control is-invalid text-center";
                   marca.className = "form-control is-invalid text-center";
                   grupo.className = "form-control is-invalid text-center";
                   tipo.className = "form-control is-invalid text-center";
                   estoque_minimo_permitido.className = "form-control is-invalid text-center";
                   valor.className = "form-control is-invalid text-center";
               }
           },
           error: function (retorno) {
            $('#alert-form')
                   .addClass('alert alert-danger')
                   .html('<strong>Erro!</strong> Impossivel realizar o envio das informações. Contate o administrador do sistema<br><strong>Cod.: </strong>SD-00-N');
           },
           cache: false,
           contentType: false,
           processData: false,
           xhr: function(){
               var myXhr = $.ajaxSettings.xhr();
               if(myXhr.upload){
                   myXhr.upload.addEventListener('progress',
                   function(){
                       // progresso de upload
                   }, false);
               }
               return myXhr;
           }
       });
    });
</script>