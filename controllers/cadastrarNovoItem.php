<?php
require_once ("../dll/conection.php");
$descricao_longa = $_POST['descricao_longa'];
$descricao = $_POST['descricao'];
$gondula = $_POST['gondula'];
$barras_ean = $_POST['barras_ean'];
$codigo_reduzido = $_POST['codigo_reduzido'];
$fabricante = $_POST['fabricante'];
$marca = $_POST['marca'];
$grupo = $_POST['grupo'];
$tipo = $_POST['tipo'];
$estoque_minimo_permitido = $_POST['estoque_minimo_permitido'];
$valor = $_POST['valor'];
$usuario_cadastro = $_POST['usuario_cadastro'];
$status = $_POST['status'];
$data_cadastro = $_POST['data_cadastro'];
$hora_cadastro = $_POST['hora_cadastro'];

$query = $pdo->prepare("INSERT INTO db_departamento_ti.tb_item (descricao_item,
                                                                descricao_longa_item,
                                                                gondula_item,
                                                                barras_ean_item,
                                                                codigo_reduzido_item,
                                                                fabricante_item,
                                                                marca_item,
                                                                grupo_item,
                                                                tipo_item,
                                                                resp_cad_item,
                                                                status_item,
                                                                data_cad_item,
                                                                hora_cad_item,
                                                                estoque_min_item,
                                                                valor_compra_item)
                                                        VALUES ('{$descricao}',
                                                                '{$descricao_longa}',
                                                                '{$gondula}',
                                                                '{$barras_ean}',
                                                                '{$codigo_reduzido}',
                                                                '{$fabricante}',
                                                                '{$marca}',
                                                                '{$grupo}',
                                                                '{$tipo}',
                                                                '{$usuario_cadastro}',
                                                                '{$status}',
                                                                '{$data_cadastro}',
                                                                '{$hora_cadastro}',
                                                                '{$estoque_minimo_permitido}',
                                                                '{$valor}')");
    if($query->execute() != null) {
        echo 'requestSucessfull';
    }else{
        echo 'requestFail';
    }

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
//echo 'requestSucessfulls';
*/
?>