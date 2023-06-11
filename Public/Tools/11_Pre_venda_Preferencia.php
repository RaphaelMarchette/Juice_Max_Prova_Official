<?php
    include '200_SELECT_TABLE.php';

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $pre_venda_preferencia_nome = $user_data['nome'];
    }
?>