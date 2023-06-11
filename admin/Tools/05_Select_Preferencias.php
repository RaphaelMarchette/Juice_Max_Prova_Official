<?php
    include '200_SELECT_TABLE.php';

    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $select_preferencias_id = $user_data['id'];
        $select_preferencias_nome = $user_data['nome'];
    }
?>