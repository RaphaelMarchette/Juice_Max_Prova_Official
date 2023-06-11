<?php
    $table_Select = '17_pre_ingredientes';


    //________________________________________________________
    $table_Select = '03_Select_liquidos';
    $id = $id_fk_liquido;
    include "$table_Select.php";
    //________________________________________________________
    $table_Select = '02_select_pesos';
    $id = $id_fk_peso_liquido;
    include "$table_Select.php";
    //________________________________________________________   
    
    include '500_Pre_venda_suco_valor.php';

    $pre_venda_liquido_valor = $select_liquidos_valor * $select_pesos_valor;
    $pre_venda_liquido_valor = number_format($pre_venda_liquido_valor, 2, '.', '');
    if($id_fk_liquido == 1)
    {
        $pre_venda_liquido_valor = $valor_suco;
        $pre_venda_liquido_valor = number_format($pre_venda_liquido_valor, 2, '.', '');
    }

    $valor_total_suco = $valor_suco + $pre_venda_liquido_valor;

    $valor_total_suco = number_format($valor_total_suco, 2, '.', '');
?>
