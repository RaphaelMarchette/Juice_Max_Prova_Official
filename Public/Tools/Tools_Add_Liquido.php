<?php
    if(!empty($_GET['id_Select']))
    {
        include_once('../../config.php');

        $table_Select = $_GET['table_Select'];

        $id_Select = $_GET['id_Select'];

        $table_Insert = $_GET['table_Insert'];

        $sql_Select = "SELECT * FROM $table_Select WHERE id = $id_Select ";

        $result_Select = $conexao->query($sql_Select);

        if($result_Select->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result_Select))
            {
                $liquidos_id = $user_data['id'];
                $liquidos_nome = $user_data['nome'];
                $liquidos_valor = $user_data['valor'];
            }
        }

        // include 'Result_Pre_Liquido.php';

        $sql_Select_2 = "SELECT * FROM pre_suco WHERE id='1'";

        $result_Select_2 = $conexao->query($sql_Select_2);

        if($result_Select_2->num_rows > 0)
        {
            while($user_data_2 = mysqli_fetch_assoc($result_Select_2))
            {
                $peso_id_fk = $user_data_2['liquido_peso'];
                $pre_suco_valor = $user_data_2['valor'];
            }
        }

        $sql_Select_8 = "SELECT * FROM select_pesos WHERE id='$peso_id_fk'";

        $result_Select_8 = $conexao->query($sql_Select_8);

        if($result_Select_8->num_rows > 0)
        {
            while($user_data_8 = mysqli_fetch_assoc($result_Select_8))
            {
                $nome_peso_fk = $user_data_8['nome'];
            }
        }


        $liquido_valor_res = $liquidos_valor * $nome_peso_fk ;


        if($id_Select == 1)
        {
            $liquido_valor_res = $pre_suco_valor;
        }

        $liquido_valor_res = number_format($liquido_valor_res, 2, '.', '');


        $sqlDelete = "DELETE FROM $table_Insert ";
        $resultDelete = $conexao->query($sqlDelete);

        $sql_Insert = "INSERT INTO $table_Insert (id, id_fk, nome, valor) VALUES ('1', '$id_Select', '$liquidos_nome', '$liquido_valor_res') ";
        $result_Insert = $conexao->query($sql_Insert);

        header('Location: ../Pedir.php');


    }
    else
    {
        header('Location: ../Pedir.php');
    }

?>


