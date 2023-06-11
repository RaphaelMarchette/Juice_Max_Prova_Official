<?php

    $sql_Select = "SELECT * FROM 03_Select_Liquidos WHERE id='$id_Select'";

    $result_Select = $conexao_admin->query($sql_Select);

    if($result_Select->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_Select))
        {
            $Liquido_nome = $user_data['nome'];
            $Liquido_valor = $user_data['valor'];
            $Liquido_estoque = $user_data['estoque'];
            $Liquido_path = $user_data['path'];
        }
    }

?>
