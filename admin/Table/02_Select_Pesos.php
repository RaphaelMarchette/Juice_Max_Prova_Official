<?php

    $sql_Select = "SELECT * FROM 02_Select_Pesos WHERE id='$id_Select'";

    $result_Select = $conexao_admin->query($sql_Select);

    if($result_Select->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_Select))
        {
            $peso_nome = $user_data['peso'];
        }
    }

?>
