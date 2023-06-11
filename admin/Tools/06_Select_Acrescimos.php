<?php
    include '200_SELECT_TABLE.php';

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $select_acrescimos_id = $user_data['id'];
        $select_acrescimos_nome = $user_data['nome'];
        $select_acrescimos_valor = $user_data['valor'];
        $select_acrescimos_estoque = $user_data['estoque'];
    }
?>