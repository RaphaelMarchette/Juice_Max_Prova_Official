<?php include 'Templates/Tela.php' ?>

<div class="container_w">


    <div class="aba">

        <a href=""  class="logado"><?php echo 'Bem vindo '.$logado  ?></a>

        <a href="sair.php"  class="bt bt_right">Sair</a>
    
    </div>


    <div class="w_20vw">
        <div class="container_h">

            <div class="h_2vh"></div>

            <div class="h_40vh">

                <ul class="lote_1">
                    <li>
                        <input type="radio" id="menu_1_bt_1" name="menu_1_vendas" onclick="bt_nav('vendas_resumo','vendas_table');" />
                        <label for="menu_1_bt_1" class="menu_1_bt_1">
                            Vendas
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_2" name="menu_1_vendas" onclick="bt_nav('frutas_resumo','frutas_table');"/>
                        <label for="menu_1_bt_2" class="menu_1_bt_2">
                            Frutas
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_3" name="menu_1_vendas" onclick="bt_nav('frutas_resumo','Liquidos_table');" checked/>
                        <label for="menu_1_bt_3" class="menu_1_bt_3">
                            Liquidos
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_4" name="menu_1_vendas" onclick="bt_nav('frutas_resumo','Acrescimos_table');" checked/>
                        <label for="menu_1_bt_4" class="menu_1_bt_4">
                            Acrescimos
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_5" name="menu_1_vendas" onclick="bt_nav('frutas_resumo','sucos_table');" />
                        <label for="menu_1_bt_5" class="menu_1_bt_5">
                            Sucos
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="menu_1_bt_6" name="menu_1_vendas" onclick="bt_nav('frutas_resumo','admins_table')" />
                        <label for="menu_1_bt_6" class="menu_1_bt_6">
                            Admins
                        </label>
                    </li>
                </ul>

            </div>

            <div class="h_spc"></div>

            <div class="h_40vh oculto" id="vendas_resumo"><?php include 'Templates/Admin_Menu_Resumo.php' ?></div> 

            <div class="h_40vh oculto" id="frutas_resumo"><?php include 'Templates/Admin_Menu_Resumo.php' ?></div>

            <div class="h_40vh oculto" id="Liquidos_resumo"><?php include 'Templates/Admin_Menu_Resumo.php' ?></div>

            <div class="h_40vh oculto" id="sucos_resumo"><?php include 'Templates/Admin_Menu_Resumo.php' ?></div> 

            <div class="h_40vh oculto" id="admins_resumo"><?php include 'Templates/Admin_Menu_Resumo.php' ?></div> 

            <div class="h_2vh"></div>

        </div>
    </div>

    <div class="w_spc"></div>

    <div class="w_78vw">
        <div class="container_h">

            <div class="h_2vh"></div>


            <div class="h_auto oculto" id="vendas_table"><?php include 'Templates/Admin_Table_Vendas2.php' ?></div>   

            <div class="h_auto oculto" id="frutas_table"><?php include 'Templates/Admin_Table_Frutas.php' ?></div>

            <div class="h_auto oculto" id="Liquidos_table"><?php include 'Templates/Admin_Table_Liquidos.php' ?></div>   

            <div class="h_auto oculto" id="Acrescimos_table"><?php include 'Templates/Admin_Table_Acrescimos.php' ?></div>   

            <div class="h_auto oculto" id="sucos_table"><?php include 'Templates/Admin_Table_Sucos.php' ?></div>   

            <div class="h_auto oculto" id="admins_table"><?php include 'Templates/Admin_Table_Admins.php' ?></div>   

            <div class="h_2vh"></div>

        </div>   
    </div>
    <div class="w_spc"></div>

</div>

