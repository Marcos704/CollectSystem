<?php
//require_once ("barcode.php");
$bar = "1234567890128";
?>

<div class="container text-center">
    <div class="alert alert-warning" role="alert">
        Módulo não disponível
    </div>
</div>
<div>
        <img class="mark" jsbarcode-format="EAN13" jsbarcode-value="<?php echo $bar?>" jsbarcode-textmargin="0" jsbarcode-fontoptions="bold" width="150">
        bar
		<svg id="barcode"></svg>

</div>
<script type="text/javascript">
//JsBarcode(".barcode").init();
//JsBarcode("#barcode", "7898080640239", {format: "EAN13"});
JsBarcode(".mark").init();

  
                /*var codebar = '190520001';
                var barCode = code128(codebar, '273', 'A');
                //alert(barCode);
                //window.document.write(barCode);
                $("#barcode1").html(barCode);
                $("#numeber").html(codebar);*/
                
                
</script>