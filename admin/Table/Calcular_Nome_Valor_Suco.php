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

            include '01_Select_Frutas.php';

            include '02_Select_Pesos.php';
        }
    }
?>
