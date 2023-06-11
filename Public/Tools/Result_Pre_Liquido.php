<?php

        $sql_Select = "SELECT * FROM 10_pre_venda_liquido WHERE id=1";

        $result_Select = $conexao->query($sql_Select);

        if($result_Select->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result_Select))
            {
                $peso_id_fk = $user_data_1['liquido_peso'];
            }
        }


        $sql_Select_8 = "SELECT * FROM 02_select_pesos WHERE id='$peso_id_fk'";

        $result_Select_8 = $conexao->query($sql_Select_8);

        if($result_Select_8->num_rows > 0)
        {
            while($user_data_8 = mysqli_fetch_assoc($result_Select_8))
            {
                $nome_peso_fk = $user_data_8['nome'];
            }
        }

    $liquido_valor_res = $liquidos_valor * $nome_peso_fk;
    $liquido_valor_res = number_format($liquido_valor_res, 2, '.', '');
?>
