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
        if(!empty($result_Select))
        {
            header("Location: ../Pedir.php");
            //________________________________________________________
            $table = '04_select_sucos';
            $id = $id_Select;
            include "$table.php";
            //________________________________________________________
            include '500_Pre_venda_suco_valor.php';
            //________________________________________________________
            $table = '03_Select_liquidos';
            $id = $id_fk_liquido;
            include "$table.php";
            //________________________________________________________
            $table = '02_select_pesos';
            $id = $id_fk_peso_liquido;
            include "$table.php";
            //________________________________________________________        
            $pre_venda_liquido_valor = $select_liquidos_valor * $select_pesos_valor;
            $pre_venda_liquido_valor = number_format($pre_venda_liquido_valor, 2, '.', '');
            if($id_fk_liquido == 1)
            {
                $pre_venda_liquido_valor = $valor_suco;
                $pre_venda_liquido_valor = number_format($pre_venda_liquido_valor, 2, '.', '');
            }
            //________________________________________________________
            $sql_Insert = "INSERT INTO $table_Insert (id, id_fk, nome, valor, id_fk_peso_liquido) VALUES ('1', '$id_Select', '$trading_name', '$valor_suco','$id_fk_peso_liquido') ";
            $result_Insert = $conexao->query($sql_Insert);
            //________________________________________________________
            $sql_Insert = "INSERT INTO 10_pre_venda_liquido (id, id_fk, nome, valor) VALUES ('1', '$id_fk_liquido', '$select_liquidos_nome', '$pre_venda_liquido_valor') ";
            $result_Insert = $conexao->query($sql_Insert);
            //________________________________________________________
            header("Location: ../Pedir.php");
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
