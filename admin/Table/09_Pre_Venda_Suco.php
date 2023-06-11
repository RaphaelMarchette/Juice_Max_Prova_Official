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

            $sql_Select_5 = "SELECT * FROM select_frutas WHERE id='$id_fruta_fk' ";

            $result_Select_5 = $conexao->query($sql_Select_5);
        
            if($result_Select_5->num_rows > 0)
                {
                    while($user_data_5 = mysqli_fetch_assoc($result_Select_5))
                    {
                        $fruta_nome = $user_data_5['nome'];
                        $fruta_valor = $user_data_5['valor'];
                    }
                }

            $sql_Select_6 = "SELECT * FROM select_pesos WHERE id='$a[$i]' ";

            $result_Select_6 = $conexao->query($sql_Select_6);
        
            if($result_Select_6->num_rows > 0)
                {
                    while($user_data_6 = mysqli_fetch_assoc($result_Select_6))
                    {
                        $peso_nome = $user_data_6['nome'];
                    }
                }

                $valor_suco_uni = ($fruta_valor * $peso_nome);
                $valor_suco += $valor_suco_uni;

                if($liquido_id_fk == 1)
                {
                    $liquido_valor = $valor_suco;
                    $liquido_valor = number_format($liquido_valor, 2, '.', '');
                }

                $valor_suco_uni = number_format($valor_suco_uni, 2, '.', '');
                $valor_suco = number_format($valor_suco, 2, '.', '');
        }
    }
?>
