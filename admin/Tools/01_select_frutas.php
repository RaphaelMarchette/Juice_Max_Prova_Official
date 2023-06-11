<?php
    include '200_SELECT_TABLE.php';

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $select_frutas_id = $user_data['id'];
        $select_frutas_nome = $user_data['nome'];
        $select_frutas_valor = $user_data['valor'];
        $select_frutas_estoque = $user_data['estoque'];
    }
?>