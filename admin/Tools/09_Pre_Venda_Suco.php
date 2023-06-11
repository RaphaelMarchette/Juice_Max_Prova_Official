<?php
    include '200_SELECT_TABLE.php';

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $pre_venda_suco_id_fk = $user_data['id_fk'];
        $pre_venda_suco_nome = $user_data['nome'];
        $pre_venda_suco_valor = $user_data['valor'];
        $pre_venda_suco_id_fk_peso_liquido = $user_data['id_fk_peso_liquido'];
    }
?>