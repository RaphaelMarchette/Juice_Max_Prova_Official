<?php
    include '200_SELECT_TABLE.php';

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $pre_venda_Acrescimo_id_fk = $user_data['id_fk'];
        $pre_venda_Acrescimo_nome = $user_data['nome'];
        $pre_venda_Acrescimo_valor = $user_data['valor'];
        $pre_venda_Acrescimo_estoque = $user_data['estoque'];
    }
?>