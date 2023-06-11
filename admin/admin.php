<?php include 'Templates/Tela.php' ?>

<div class="container_w">

    <div class="aba">

        <a href=""  class="logado"><?php echo 'Bem vindo '.$logado  ?></a>

        <a href="sair.php"  class="bt bt_sair">Sair</a>
    
    </div>

    <div class="w_20vw">
        <div class="container_h">

            <div class="h_2vh"></div>

            <div class="h_40vh">

                <ul class="lote_1">
                    <li>
                        <input type="radio" id="menu_1_bt_1" name="menu_1_vendas" onclick="bt_nav('vendas_table');" />
                        <label for="menu_1_bt_1" class="menu_1_bt_1">
                            Vendas
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_2" name="menu_1_vendas" onclick="bt_nav('frutas_table');"/>
                        <label for="menu_1_bt_2" class="menu_1_bt_2">
                            Frutas
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_3" name="menu_1_vendas" onclick="bt_nav('Liquidos_table');" />
                        <label for="menu_1_bt_3" class="menu_1_bt_3">
                            Liquidos
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_4" name="menu_1_vendas" onclick="bt_nav('Acrescimos_table');" />
                        <label for="menu_1_bt_4" class="menu_1_bt_4">
                            Acrescimos
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_5" name="menu_1_vendas" onclick="bt_nav('sucos_table');" />
                        <label for="menu_1_bt_5" class="menu_1_bt_5">
                            Sucos
                        </label>
                    </li>

                    <li>
                        <input type="radio" id="menu_1_bt_6" name="menu_1_vendas" onclick="bt_nav('admins_table')" />
                        <label for="menu_1_bt_6" class="menu_1_bt_6">
                            Admins
                        </label>
                    </li>
                </ul>

            </div>

            <div class="h_spc"></div>

            <div class="h_40vh oculto" id="vendas_resumo"> <?php include 'Templates/Admin_Menu_Resumo.php' ?></div> 

            <div class="h_2vh"></div>

        </div>
    </div>

    <div class="w_spc"></div>

            <div class="oculto" id="vendas_table"><?php include 'Templates/Admin_01_Card_Vendas.php' ?></div>   

            <div class="oculto" id="frutas_table"><?php include 'Templates/Admin_02_Card_Frutas.php' ?></div>

            <div class="oculto" id="Liquidos_table"><?php include 'Templates/Admin_03_Card_Liquidos.php' ?></div>   

            <div class="oculto" id="Acrescimos_table"><?php include 'Templates/Admin_04_Card_Acrescimos.php' ?></div>   

            <div class="oculto" id="sucos_table"><?php include 'Templates/Admin_05_Card_Sucos.php' ?></div>   

            <div class="oculto" id="admins_table"><?php include 'Templates/Admin_06_Card_Admins.php' ?></div>   

    <div class="w_spc"></div>

</div>

