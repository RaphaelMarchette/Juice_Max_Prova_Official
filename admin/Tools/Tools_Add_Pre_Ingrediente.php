<?php
    include_once('../../config.php');

    $sqlSelect_1 = "SELECT * FROM 14_pre_ingrediente_fruta WHERE id='1'";
    $result_1 = $conexao->query($sqlSelect_1);

    if($result_1->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_1))
        {
            $id_fk = $user_data['id_fk'];
            $nome = $user_data['nome'];
            $valor = $user_data['valor'];
        }

        $sql_6 = "SELECT SUM(peso) as pesototal FROM 17_pre_ingredientes";
        $sql_6 = $conexao->query($sql_6);
        $row = $sql_6->fetch_assoc();
        $soma = $row['pesototal'];
        $soma_peso = number_format($soma, 3, '.', '');
        $peso_Bat = 0.500 - $soma_peso;
        $peso_Bat = number_format($peso_Bat, 3, '.', '');

        $sqlSelect_2 = "SELECT * FROM 15_pre_ingrediente_peso WHERE id='1'";
        $result_2 = $conexao->query($sqlSelect_2);

        if($result_2->num_rows > 0)
        {
            while($user_data_2 = mysqli_fetch_assoc($result_2))
            {
                $id_fk_peso = $user_data_2['id_fk'];
                $peso = $user_data_2['valor'];
            }

            $sub_valor = ($valor * $peso) ;

            if($peso < 0.050 )
            {
                header('Location: ../new.php?ok=12');
            }


            if(($peso_Bat - $peso) <= 0.050 )
            {
                header('Location: ../new.php?ok=9');
            }

            $sqlSelect_3 = "SELECT * FROM 17_pre_ingredientes";
            $result_3 = $conexao->query($sqlSelect_3);
            $cont = 1;
            if($result_3->num_rows > 0)
            {
                while($user_data_3 = mysqli_fetch_assoc($result_3))
                {
                    $cont+=1;
                    $comparar_id = $user_data_3['id_fk'];
                    echo "sadsa";

                    if($comparar_id == $id_fk)
                    {
                        header('Location: ../new.php?ok=14');
                    }

                }
            }

            if($cont == 6)
            {
                header('Location: ../new.php?ok=10');
            }

            if(($cont < 6) && ($peso_Bat - $peso) >= 0.050 )
            {
                $result = mysqli_query($conexao, "INSERT INTO 17_pre_ingredientes (id, id_fk, nome, valor, id_fk_peso, peso) VALUES ('$cont', '$id_fk', '$nome', '$sub_valor', '$id_fk_peso','$peso') ");

                $sqlInsert_3 = "DELETE FROM 14_pre_ingrediente_fruta ";
                $result_3 = $conexao->query($sqlInsert_3);

                $sqlInsert_4 = "DELETE FROM 15_pre_ingrediente_peso ";
                $result_4 = $conexao->query($sqlInsert_4);
            
                header('Location: ../new.php?ok=7');
            }

        }
        else
        {
            header('Location: ../new.php?ok=12');
        }


    }
    else
    {
        header('Location: ../new.php?ok=13');
    }
   
?>