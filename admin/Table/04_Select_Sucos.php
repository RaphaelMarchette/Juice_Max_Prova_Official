<?php

        $sql_Select = "SELECT * FROM 04_Select_Sucos WHERE id='$id_Select'";

        $result_Select = $conexao_admin->query($sql_Select);

        if($result_Select->num_rows > 0)
        {
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

                $peso_1_id_fk = $user_data['id_fk_peso_1'];
                $peso_2_id_fk = $user_data['id_fk_peso_2'];
                $peso_3_id_fk = $user_data['id_fk_peso_3'];
                $peso_4_id_fk = $user_data['id_fk_peso_4'];
                $peso_5_id_fk = $user_data['id_fk_peso_5'];
            }
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

        }
?>
