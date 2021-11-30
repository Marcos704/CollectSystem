<?php
class Produto{
    private $descricaoLongaProduto; //Ok
    private $descricaoProduto; //Ok
    private $gondulaProduto; //Ok
    private $barrasEANProduto; //Ok
    private $codigoReduzidoProduto; //Ok
    private $fabricanteProduto; //Ok
    private $marcaProduto; //Ok
    private $grupoProduto; //Ok
    private $tipoProduto; //Ok
    private $usuarioCadastroProduto; //Ok
    private $statusProduto; //Ok
    private $dataCadastroProduto; //Ok
    private $horaCadastroProduto; //Ok
    private $estoqueMinimoProduto; // Ok
    private $valorCompraProduto; //Ok
 
    private PDO $conexaoBD;

    public function __construct(PDO $conexao){ /* Realizando a cópia de instancias de conexão como banco de dados, assim como o cache dos registros*/
        $this->conexaoBD = $conexao;
        $query = $conexao->prepare("SELECT  *FROM db_departamento_ti.tb_item");
        if($query->execute()){ /* Se existe conexao*/
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            $this->descricaoLongaProduto = $resultado[0]['descricao_item'];
            $this->descricaoProduto = $resultado[0]['descricao_longa_item'];
            $this->gondulaProduto = $resultado[0]['gondula_item'];
            $this->barrasEANProduto = $resultado[0]['barras_ean_item'];
            $this->codigoReduzidoProduto = $resultado[0]['codigo_reduzido_item'];
            $this->fabricanteProduto = $resultado[0]['fabricante_item'];
            $this->marcaProduto = $resultado[0]['marca_item'];
            $this->grupoProduto = $resultado[0]['grupo_item'];
            $this->tipoProduto = $resultado[0]['tipo_item'];
            $this->usuarioCadastroProduto = $resultado[0]['resp_cad_item'];
            $this->statusProduto = $resultado[0]['status_item'];
            $this->dataCadastroProduto = $resultado[0]['data_cad_item'];
            $this->horaCadastroProduto = $resultado[0]['hora_cad_item'];
            $this->estoqueMinimoProduto = $resultado[0]['estoque_min_item'];
            $this->valorCompraProduto = $resultado[0]['valor_compra_item'];
        }else{
            $this->descricaoLongaProduto =null;
            $this->descricaoProduto =null; 
            $this->gondulaProduto = null;
            $this->barrasEANProduto = null;
            $this->codigoReduzidoProduto = null;
            $this->fabricanteProduto = null;
            $this->marcaProduto = null;
            $this->grupoProduto = null;
            $this->tipoProduto = null;
            $this->usuarioCadastroProduto =null; 
            $this->statusProduto = null;
            $this->dataCadastroProduto = null;
            $this->horaCadastroProduto =null;
            $this->estoqueMinimoProduto = null;
            $this->valorCompraProduto = null;
        }
    }


    /* Getters and Setters for Produto */
    

}



?>