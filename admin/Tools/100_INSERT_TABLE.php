<?php
    $sql_Insert = "INSERT INTO $table_Insert (id, id_fk, nome, valor, id_fk_peso_liquido) VALUES ('1', '$id_Select', '$trading_name', '$valor_suco','$id_fk_peso_liquido') ";

    $result_Insert = $conexao->query($sql_Insert);
?>
