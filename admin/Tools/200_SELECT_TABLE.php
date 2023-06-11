<?php
    if(!empty($id_Select))
    {
        $sql_Select = " SELECT * FROM $table_Select WHERE id = $id_Select ";

        $result_Select = $conexao->query($sql_Select);
    }
    else
    {
        $sql_Select = " SELECT * FROM $table_Select ";

        $result_Select = $conexao->query($sql_Select);
    }
?>