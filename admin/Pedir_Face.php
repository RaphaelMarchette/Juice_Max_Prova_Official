<?php include 'Templates/Tela.php' ?>

<div class="container_row">

<div class="aba">
        <a href="Pagar.php"  class="bt_voltar" id="bt_voltar">Voltar</a>
    </div>

    <div class="spc"></div>

    <div class="row_1">
        <div class="container_col">
            <?php include 'Templates/Table_Select_Sucos.php' ?>
        </div>
    </div>

        <div class="spc"></div>

        <div class="row_2">

            <div class="container_col">
            <div class="col_2rem"></div>

                    <div class="col_10rem"><?php include 'Templates/Table_Pre_Suco.php' ?></div>


                    <div class="spc_col"></div>


                    <div class="col_10rem"><?php include 'Templates/Table_Pre_Liquido.php' ?></div>


                    <div class="spc_col"></div>


                    <div class="col_10rem"><?php include 'Templates/Table_Pre_Preferencia.php' ?></div>


                    <div class="spc_col"></div>


                    <div class="col_10rem"><?php include 'Templates/Table_Pre_Acrescimo.php' ?></div>


                    <div class="spc_col"></div>


                    <div class="col_2rem">
                        <a href='Tools/Tools_Add_pagar.php' title='Adicionar' id='bt_fazer_pedido'>Fazer Pedido
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentrowor' class='bi bi-bag-plus' viewBox='0 0 16 16'>
                                <path fill-rule='evenodd' d='M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z'/>
                                <path d='M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z'/>
                            </svg>
                        </a>
                    </div>


                    <div class="col_4rem"></div>
            </div>
        </div>

    <div class="spc"></div>

        <div class="row_3">

            <div class="container_col">

                <div class="spc_col"></div>
            </div>
            
        </div>
        
    <div class="spc"></div>

</div>



<script>
    document.getElementById('pesquisar').focus();
</script>

<script>
    document.addEventListener('keydown', function(e) {
    if(e.keyCode == 32){  //  Tecla Space
    document.getElementById("bt_fazer_pedido").click();
    }
    });
</script>