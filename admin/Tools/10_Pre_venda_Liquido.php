<?php
    include '200_SELECT_TABLE.php';

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $pre_venda_liquido_id_fk = $user_data['id_fk'];
        $pre_venda_liquido_nome = $user_data['nome'];
        $pre_venda_liquido_valor = $user_data['valor'];
    }
?>