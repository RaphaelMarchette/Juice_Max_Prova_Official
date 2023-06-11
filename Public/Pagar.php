<?php

    $ok = '0';

    if(!empty($_GET['ok']))
    {
        $ok = $_GET['ok'];

        if($ok == '1')
        {
            ?>
                <div class="sucesso">Compra Concluída com Sucesso!</div>
                <script>
                    setTimeout(function() {
                    $('.sucesso').fadeOut('fast');
                    }, 3000);
                </script>
            <?php

            $ok = '0';
        }
        else
        {
            ?>
                <div class="erro">Compra Cancelada !!!</div>
            <?php
        }
    }
?>


<?php include 'Templates/Tela.php' ?>

<div  class="container_row">
    <div class="aba">
        <a href="Pedir.php" class="bt_pedir" id="bt_pedir">Pedir</a>
        <a href="../index.php"  class="bt_voltar" id="bt_voltar">home</a>
    </div>

    <div class="spc"></div>

    <div class="row_6_pagar">

        <div class="container_col">
            <div class="col_2rem"></div>
            <div class="col_pagar_82vh">
                <?php include 'Templates/Table_View_Pagar_Total.php' ?>
            </div>
        </div>
    </div>

    <div class="spc"></div>

    <div class="row_7_pagar">
        <div class="container_col">
            <div class="col_2rem"></div>
            <div class="col_pagar_82vh">
                <?php include 'Templates/Table_View_Pagar.php' ?>    
            </div>   
        </div>
    </div>

    <div class="spc"></div>
</div>


<script>
    document.addEventListener('keydown', function(e) {
    if(e.keyCode == 32){  //  Tecla Space
    document.getElementById("bt_pedir").click();
    }
    });
</script>