<?php


?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-center">
                    <p><strong>Cadastro códigos (Barras/Interno)</strong></p>
                </div>
                <div class="col-12 text-center">
                    <p>Rotina de cadastro, edição ou exclusão</p>
                </div>
            </div>
            <div class="section">
                <form>
                    <div class="box-form-control" id="infor_cad_prod">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="selecao_item">Selecione um item</label>
                                <div class="input-group-prepend form-control-cad">
                                    <input type="text" class="form-control form-control-cad" id="selecao_item">
                                    <a href="#" class="btn btn-succsess btn-circle" title="pesquisar"><i class="fas fa-search text-success"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-center">Códigos (Barras/Interno)</p>
                                <div class="box-form-control" id="infor_cad_prod">
                                    <div class="table-resposive">
                                        <table class="table table-responsiva" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Barras EAN</th>
                                                    <th class="text-center">Código Interno</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control text-center" id="barras_ean"></td>
                                                    <td><input type="text" class="form-control text-center" id="codigo_interno"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-right p-2">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fas fa-check"></i>
                                        Finalizar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>