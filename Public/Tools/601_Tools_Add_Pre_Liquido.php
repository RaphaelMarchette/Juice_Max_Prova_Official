<?php
    if(!empty($_GET['id_Select']))
    {
        $table_Select = $_GET['table_Select'];
        $id_Select = $_GET['id_Select'];
        $table_Insert = $_GET['table_Insert'];
        include_once('../../config.php');
        //__________________________________________________________
        $table = '09_pre_venda_suco';
        $id = 1;
        include "$table.php";
        //___________________________________________________________
        if($result_Select->num_rows > 0)
        {
            $table = $table_Select;
            $id = $id_Select;
            include "$table.php";
            //________________________________________________________
            $table = '02_select_pesos';
            $id = $pre_venda_suco_id_fk_peso_liquido;
            include "$table.php";
            //________________________________________________________
            $pre_venda_liquido_valor = $select_liquidos_valor * $select_pesos_valor;
            $pre_venda_liquido_valor = number_format($pre_venda_liquido_valor, 2, '.', '');
            if($id_Select == 1)
            {
                $pre_venda_liquido_valor = $pre_venda_suco_valor;
                $pre_venda_liquido_valor = number_format($pre_venda_liquido_valor, 2, '.', '');
            }
            //________________________________________________________
            $table_Delete = $table_Insert;
            include '401_DELETE_TABLE_DROP.php';
            //________________________________________________________
            $sql_Insert = "INSERT INTO $table_Insert (id, id_fk, nome, valor) VALUES ('1', '$id_Select', '$select_liquidos_nome', '$pre_venda_liquido_valor') ";
            $result_Insert = $conexao->query($sql_Insert);
            //________________________________________________________
            header('Location: ../Pedir.php');
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
