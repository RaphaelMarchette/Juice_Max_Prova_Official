<?php
    include '200_SELECT_TABLE.php';
    
    while($user_data = mysqli_fetch_assoc($result_Select))
    {
        $select_pesos_valor = $user_data['valor'];
    }
?>
