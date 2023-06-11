<?php

include_once('../../config_03.php');


$id_Select = 1;


// include '04_Select_Sucos.php';

$sql_Select = "SELECT * FROM 04_Select_Sucos WHERE id='$id_Select'";

$result_Select = $conexao_admin->query($sql_Select);

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $nome = $user_data['nome'];
        $liquido_id_fk = $user_data['liquido_id_fk'];
        $liquido_peso_fk = $user_data['liquido_peso'];

        $id_fk_fruta_1 = $user_data['id_fk_fruta_1'];
        $id_fk_fruta_2 = $user_data['id_fk_fruta_2'];
        $id_fk_fruta_3 = $user_data['id_fk_fruta_3'];
        $id_fk_fruta_4 = $user_data['id_fk_fruta_4'];
        $id_fk_fruta_5 = $user_data['id_fk_fruta_5'];

        $id_fk_peso_1 = $user_data['id_fk_peso_1'];
        $id_fk_peso_2 = $user_data['id_fk_peso_2'];
        $id_fk_peso_3 = $user_data['id_fk_peso_3'];
        $id_fk_peso_4 = $user_data['id_fk_peso_4'];
        $id_fk_peso_5 = $user_data['id_fk_peso_5'];
    }

    $lista_id_frutas = array($id_fk_fruta_1, $id_fk_fruta_2, $id_fk_fruta_3, $id_fk_fruta_4, $id_fk_fruta_5);

    $tam_lista_id = 0;

    foreach ($lista_id_frutas as &$id_fruta_fk) {
        if(!empty($id_fruta_fk))
        {
            $tam_lista_id += 1;
        }
    }

    $lista_peso_frutas= array($id_fk_peso_1, $id_fk_peso_2, $id_fk_peso_3, $id_fk_peso_4, $id_fk_peso_5);

    list($a[1], $a[2], $a[3], $a[4], $a[5]) = $lista_peso_frutas;

    $nome_completo = '';
    $valor_suco = 0;

    $i = 0;

    foreach ($lista_id_frutas as &$id_fruta_fk) {
        if(!empty($id_fruta_fk))
        {
            $i += 1;

            $id_Select = $id_fruta_fk;

            include '01_Select_Frutas.php';

            $id_Select = $a[$i];

            include '02_Select_Pesos.php';
        }
    }


    $valor_suco_uni = ($fruta_valor * $peso_nome);
    $valor_suco += $valor_suco_uni;

    $valor_suco_uni = number_format($valor_suco_uni, 2, '.', '');
    $valor_suco = number_format($valor_suco, 2, '.', '');

    echo "$valor_suco";
?>  