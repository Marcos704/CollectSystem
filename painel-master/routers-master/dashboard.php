<?php
//require_once ('../TI-Dep/dll/conection.php');
//require_once__DIR__.'../../dll/conection.php';
require_once("../dll/conection.php");
?>
<!-- Bar Chart -->
<div class="card shadow p-0 m-0">
    <div class="container text-center pt-2 mb-0">
        <h6>Status Gerais</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-3">
                <div class="container m-0">
                    <canvas id="myBarChart1"></canvas>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="container m-0">
                    <canvas id="myBarChart2"></canvas>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="container m-0">
                    <canvas id="myBarChar4"></canvas>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="container m-0">
                    <canvas id="myBarChar5"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>


<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total <br><small>de tabelas</small></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                    </div>
                    <div class="col-auto">
                        <a title="ver mais" class="dropdown-item p-1 m-0" href="" data-toggle="modal" data-target="#ModalTables"><i class="fas fa-database fa-2x text-gray-300"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Fornecedores Cadastrados</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-building fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Categorias<br>Cadastradas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-info fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Técnicos<br>Cadastrados</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Orçamentos (Mês)<br>-Total-</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Orçamentos (Mês)<br>-Em aberto-</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Orçamentos (Mês)<br>-Fechados-</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Orçamentos (Mês)<br>-Total(R$)-</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-file-invoice-dollar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Solicitações (Mês)<br>-Total-</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-inbox fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Solicitações (Dia)<br>-(Em aberto)-</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-inbox fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Solicitações (Dia)<br>-(Andamento)-</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-inbox fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Solicitações (Dia)<br>-Fechados-</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-inbox fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals Dashboard -->

<!--  Modal Perfil-->
<div class="modal fade" id="ModalTables" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tabelas do Sistema</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="table-reponsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Nome|Descricao</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Iniciando o bloco php para pesquisa e retorno dos dados na tabelas -->
                        <?php
                            $query = $pdo->query("SHOW TABLES");
                            $responser = $query->fetchAll(PDO::FETCH_ASSOC);
                            for($i=0 ; $i<count($responser) ; $i++){
                                foreach($responser[$i] as $key => $value){
                                }
                                $tableName = $responser[$i]['Tables_in_db_departamento_ti'];
                            
                        ?>
                        <tr>
                            <td><?php $tableName?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


<!-- Scripts Dashboard-->
<script>
    var chartdata1 = {
        //labels: nomeConcorrente,
        datasets: [{
            label: "Chamados",
            //backgroundColor: 'rgba(255, 99, 132, 0.2)',
            //borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: [
                'rgb(88, 100, 144)',
                'rgb(255, 199, 132)',
                'rgb(55, 99, 132)'
            ],
            borderRadius: 10,
            //hoverBackgroundColor: 'rgba(54, 162, 235, 0.2)',
            //hoverBorderColor: 'rgb(6, 35, 81, 1)',
            //borderWidth: 0.1,
            //order: 1,
            //minBarLength: 2,
            //pointStyle: 'line',
            data: [10, 5, 25],

            //backgroundColor: "#ff2200"
        }],
        labels: ['abert.', 'andam.', 'conclu.'],

    };

    var chartdata2 = {
        //labels: nomeConcorrente,
        datasets: [{
            label: "Serviços",
            //backgroundColor: 'rgba(255, 99, 132, 0.2)',
            //borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: [
                'rgb(255, 199, 132)',
                'rgb(255, 99, 132)',
                'rgb(55, 99, 132)'
            ],
            borderRadius: 10,
            //hoverBackgroundColor: 'rgba(54, 162, 235, 0.2)',
            //hoverBorderColor: 'rgb(6, 35, 81, 1)',
            //borderWidth: 0.1,
            //order: 1,
            //minBarLength: 2,
            //pointStyle: 'line',
            data: [100, 300, 230],

            //backgroundColor: "#ff2200"
        }],
        labels: ['abert.', 'andam.', 'conclu.'],

    };
    var chartdata3 = {
        //labels: nomeConcorrente,
        datasets: [{
            label: "Orçamentos",
            //backgroundColor: 'rgba(255, 99, 132, 0.2)',
            //borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: [
                'rgb(55, 99, 132)',
                'rgb(255, 199, 132)',
                'rgb(255, 99, 132)'

            ],
            borderRadius: 10,
            //hoverBackgroundColor: 'rgba(54, 162, 235, 0.2)',
            //hoverBorderColor: 'rgb(6, 35, 81, 1)',
            //borderWidth: 0.1,
            //order: 1,
            //minBarLength: 2,
            //pointStyle: 'line',
            data: [452, 333, 230],

            //backgroundColor: "#ff2200"
        }],
        labels: ['abert.', 'andam.', 'conclu.'],

    };
    var chartdata5 = {
        //labels: nomeConcorrente,
        datasets: [{
            label: "Solicitações",
            //backgroundColor: 'rgba(255, 99, 132, 0.2)',
            //borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: [
                'rgb(99, 99, 145)',
                'rgb(255, 199, 132)',
                'rgb(255, 99, 132)'
            ],
            borderRadius: 10,
            barPercentage: 1,
            //hoverBackgroundColor: 'rgba(54, 162, 235, 0.2)',
            //hoverBorderColor: 'rgb(6, 35, 81, 1)',
            //borderWidth: 0.1,
            //order: 1,
            //minBarLength: 2,
            //pointStyle: 'line',
            data: [452, 333, 230],

            //backgroundColor: "#ff2200"
        }],
        labels: ['abert.', 'andam.', 'conclu.'],

    };
    var ctx1 = document.getElementById("myBarChart1");
    //ctx.height = 20;
    var barGraph1 = new Chart(ctx1, {
        type: 'line',
        data: chartdata1
    });

    var ctx2 = document.getElementById("myBarChart2");
    //ctx.height = 20;
    var barGraph2 = new Chart(ctx2, {
        type: 'line',
        data: chartdata2
    });

    var ctx3 = document.getElementById("myBarChar4");
    //var ctx3 = $("#myBarChart4");
    //ctx.weight = 20;
    var barGraph3 = new Chart(ctx3, {
        type: 'line',
        data: chartdata3
    });
    var ctx5 = document.getElementById("myBarChar5");
    //var ctx3 = $("#myBarChart4");
    //ctx.weight = 20;
    var barGraph5 = new Chart(ctx5, {
        type: 'line',
        data: chartdata5
    });
</script>