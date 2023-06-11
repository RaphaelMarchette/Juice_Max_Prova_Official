<?php
    $lista_id_frutas = array($fruta_1_id_fk, $fruta_2_id_fk, $fruta_3_id_fk, $fruta_4_id_fk, $fruta_5_id_fk);

    $tam_lista_id = 0;

    foreach ($lista_id_frutas as &$id_fruta_fk) {
        if(!empty($id_fruta_fk))
        {
            $tam_lista_id += 1;
        }
    }

    $lista_peso_frutas= array($peso_1_id_fk, $peso_2_id_fk, $peso_3_id_fk, $peso_4_id_fk, $peso_5_id_fk);

    list($a[1], $a[2], $a[3], $a[4], $a[5]) = $lista_peso_frutas;

    $nome_completo = '';
    $valor_suco = 0;
    $i = 0;

    foreach ($lista_id_frutas as &$id_fruta_fk) {
        if(!empty($id_fruta_fk))
        {
            $i += 1;
            $table_Select = '01_select_frutas';
            $id_Select = $id_fruta_fk;
            include "$table_Select.php";
            //_______________________________________________________
            $table_Select = '02_select_pesos';
            $id_Select = $a[$i];
            include "$table_Select.php";
            //________________________________________________________
            $valor_suco_uni = ($select_frutas_valor * $select_pesos_valor);
            $valor_suco += $valor_suco_uni;
            $valor_suco_uni = number_format($valor_suco_uni, 2, '.', '');
            $valor_suco = number_format($valor_suco, 2, '.', '');
        }
    }
    //________________________________________________________
    $table_Select = '03_Select_liquidos';
    $id_Select = $id_fk_liquido;
    include "$table_Select.php";
    //________________________________________________________
    $table_Select = '02_select_pesos';
    $id_Select = $id_fk_peso_liquido;
    include "$table_Select.php";
    //________________________________________________________
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
