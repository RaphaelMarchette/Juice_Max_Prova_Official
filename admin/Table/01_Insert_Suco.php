<?php

    include_once('../../config.php');

    $result = mysqli_query($conexao, "INSERT INTO 04_Select_Sucos ( id, trading_name, ingredientes, id_fk_fruta_1, id_fk_peso_1, id_fk_fruta_2, id_fk_peso_2, id_fk_fruta_3, id_fk_peso_3, id_fk_fruta_4, id_fk_peso_4, id_fk_fruta_5, id_fk_peso_5, id_fk_liquido, id_fk_peso_liquido ) VALUES ('$id', '$trading_name', '$ingredientes', '$id_fk_fruta_1', '$id_fk_peso_1', '$id_fk_fruta_2', '$id_fk_peso_2', '$id_fk_fruta_3', '$id_fk_peso_3', '$id_fk_fruta_4', '$id_fk_peso_4', '$id_fk_fruta_5', '$id_fk_peso_5', '$id_fk_liquido', '$id_fk_peso_liquido') ");
?>