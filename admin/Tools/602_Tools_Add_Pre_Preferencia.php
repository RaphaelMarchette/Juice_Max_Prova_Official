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
            $table_Delete = $table_Insert;
            include '401_DELETE_TABLE_DROP.php';
            //________________________________________________________
            $sql_Insert = "INSERT INTO $table_Insert (id, id_fk, nome) VALUES ('1', '$select_preferencias_id', '$select_preferencias_nome') ";
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