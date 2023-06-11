<?php
    include_once('../../config.php');
    //__________________________________________________________
    $table = '09_pre_venda_suco';
    $id = 1;
    include "$table.php";
    //___________________________________________________________
    if($result_Select->num_rows > 0)
    {
        $table = '10_pre_venda_liquido';
        $id = 1;
        include "$table.php";
        //________________________________________________________
        if($result_Select->num_rows > 0)
        {
            $table = '11_pre_venda_Preferencia';
            $id = 1;
            include "$table.php";
            //________________________________________________________
            if($result_Select->num_rows > 0)
            {
                $table = '12_pre_venda_Acrescimo';
                $id = 1;
                include "$table.php";
                //________________________________________________________        

                $valor_suco = $pre_venda_suco_valor + $pre_venda_liquido_valor;

                $sql_Insert = "INSERT INTO 13_pre_venda (id, id_fk, nome, valor, liquido, preferencia, acrescimo, valor_acrescimo) VALUES ('defalt', '$pre_venda_suco_id_fk', '$pre_venda_suco_nome', '$valor_suco', '$pre_venda_liquido_nome', '$pre_venda_preferencia_nome','$pre_venda_Acrescimo_nome', '$pre_venda_Acrescimo_valor') ";
                $result_Insert = $conexao->query($sql_Insert);

                //________________________________________________________
                // $sql_Update = " UPDATE 10_pre_venda_liquido SET (id, id_fk, nome, valor) VALUES ('1', '$id_fk_liquido', '$select_liquidos_nome', '$pre_venda_liquido_valor') ";
                // $result_Insert = $conexao->query($sql_Update);
                //________________________________________________________
                $table_Delete = '09_pre_venda_suco';
                include '401_DELETE_TABLE_DROP.php';
                //________________________________________________________
                $table_Delete = '10_pre_venda_liquido';
                include '401_DELETE_TABLE_DROP.php';
                //________________________________________________________
                $table_Delete = '11_pre_venda_Preferencia';
                include '401_DELETE_TABLE_DROP.php';
                //________________________________________________________
                $table_Delete = '12_pre_venda_Acrescimo';
                include '401_DELETE_TABLE_DROP.php';

                header("Location: ../Pagar.php");
            }
            else
            {
                header('Location: ../Pedir.php');
            }
        }
        else
        {
            header('Location: ../Pedir.php');
        }
    }
    else
    {
        header('Location: ../Pedir.php');
    }
?>
