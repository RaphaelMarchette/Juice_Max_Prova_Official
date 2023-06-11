<?php
    include '200_SELECT_TABLE.php';

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $select_liquidos_id = $user_data['id'];
        $select_liquidos_nome = $user_data['nome'];
        $select_liquidos_valor = $user_data['valor'];
        $select_liquidos_estoque = $user_data['estoque'];
    }
?>