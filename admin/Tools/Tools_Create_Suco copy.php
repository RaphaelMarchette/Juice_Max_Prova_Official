<?php
    include_once('../../config.php');

    $table = '17_pre_ingredientes';

    $sqlSelect_1 = "SELECT * FROM $table WHERE id= 1";
    $result_1 = $conexao->query($sqlSelect_1);

    if($result_1->num_rows > 0)
    {
        while($user_data_1 = mysqli_fetch_assoc($result_1))
        {
            $fruta_1 = $user_data_1['id_fk'];
            $peso_1 = $user_data_1['id_fk_peso'];
        }

        $sqlSelect_6 = "SELECT * FROM 16_pre_ingrediente_liquido WHERE id= 1";
        $result_6 = $conexao->query($sqlSelect_6);
    
        if($result_6->num_rows > 0)
        {
            while($user_data_6 = mysqli_fetch_assoc($result_6))
            {
                $liquido_id_fk = $user_data_6['id_fk'];
            }


    
    $sqlSelect_2 = "SELECT * FROM $table WHERE id= 2";
    $result_2 = $conexao->query($sqlSelect_2);
    
    if($result_2->num_rows > 0)
    {
        while($user_data_2 = mysqli_fetch_assoc($result_2))
        {
            $fruta_2 = $user_data_2['id_fk'];
            $peso_2 = $user_data_2['id_fk_peso'];
        }
    }

    $sqlSelect_3 = "SELECT * FROM $table WHERE id= 3";
    $result_3 = $conexao->query($sqlSelect_3);

    if($result_3->num_rows > 0)
    {
        while($user_data_3 = mysqli_fetch_assoc($result_3))
        {
            $fruta_3 = $user_data_3['id_fk'];
            $peso_3 = $user_data_3['id_fk_peso'];
        }
    }

    $sqlSelect_4 = "SELECT * FROM $table WHERE id= 4";
    $result_4 = $conexao->query($sqlSelect_4);

    if($result_4->num_rows > 0)
    {
        while($user_data_4 = mysqli_fetch_assoc($result_4))
        {
            $fruta_4 = $user_data_4['id_fk'];
            $peso_4 = $user_data_4['id_fk_peso'];
        }
    }

    $sqlSelect_5 = "SELECT * FROM $table WHERE id= 5";
    $result_5 = $conexao->query($sqlSelect_5);

    if($result_5->num_rows > 0)
    {
        while($user_data_5 = mysqli_fetch_assoc($result_5))
        {
            $fruta_5 = $user_data_5['id_fk'];
            $peso_5 = $user_data_5['id_fk_peso'];
        }
    }





        include_once('../../config.php');

        $sql_6 = "SELECT SUM(peso) as pesototal FROM $table";
        $sql_6 = $conexao->query($sql_6);
        $row = $sql_6->fetch_assoc();
        $soma = $row['pesototal'];
        $soma_peso = number_format($soma, 3, '.', '');
        $peso = 0.500 - $soma_peso;
        $peso_do_liquido = number_format($peso, 3, '.', '');

        $sqlSelect_7 = "SELECT * FROM 02_select_pesos WHERE valor = '$peso_do_liquido'";
        $result_7 = $conexao->query($sqlSelect_7);
        if($result_7->num_rows > 0)
        {
            while($user_data_7 = mysqli_fetch_assoc($result_7))
            {
                $liquido_id_peso = $user_data_7['id'];
            }
        }
    



        $id                 ='DEFALT';
    
        $trading_name       ='Limão Suiço';
        
        $ingredientes       ='limão com Leite em pó';
        
        $id_fk_fruta_1      =$fruta_1;
        
        $id_fk_peso_1       =$peso_1;
        
        $id_fk_fruta_2      =$fruta_2;
        
        $id_fk_peso_2       =$peso_2;
        
        $id_fk_fruta_3      =$fruta_3;
        
        $id_fk_peso_3       =$peso_3;
        
        $id_fk_fruta_4      =$fruta_4;
        
        $id_fk_peso_4       =$peso_4;
        
        $id_fk_fruta_5      =$fruta_5;
        
        $id_fk_peso_5       =$peso_5;
        
        $id_fk_liquido      =$liquido_id_fk;
        
        $id_fk_peso_liquido =$liquido_id_peso;


        include '../Table/01_Insert_Suco.php';

        $sqlInsert_10 = "DELETE FROM 14_Pre_Ingrediente_Fruta";
        $result_10 = $conexao->query($sqlInsert_10);

        $sqlInsert_11 = "DELETE FROM 15_Pre_Ingrediente_Peso";
        $result_11 = $conexao->query($sqlInsert_11);

        $sqlInsert_12 = "DELETE FROM 16_Pre_Ingrediente_Liquido";
        $result_12 = $conexao->query($sqlInsert_12);

        $sqlInsert_13 = "DELETE FROM 17_Pre_Ingredientes";
        $result_13 = $conexao->query($sqlInsert_13);

        header('Location: ../admin.php');
    }
    else{
        header('Location: ../New.php?ok=17');
    }
    }
    else{
        header('Location: ../New.php?ok=16');
    }
?>