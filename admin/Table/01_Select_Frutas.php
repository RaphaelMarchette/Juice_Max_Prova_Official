<?php

    $sql_Select = "SELECT * FROM 01_Select_Frutas WHERE id='$id_Select'";

    $result_Select = $conexao_admin->query($sql_Select);

    if($result_Select->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_Select))
        {
            $fruta_nome = $user_data['nome'];
            $fruta_valor = $user_data['valor'];
            $fruta_estoque = $user_data['estoque'];
            $fruta_path = $user_data['path'];
        }
    }

?>
