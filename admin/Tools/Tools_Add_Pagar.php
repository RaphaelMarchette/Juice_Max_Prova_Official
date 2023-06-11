<?php

    include_once('../../config.php');


    // select_1_PRE_SUCO
    $sqlSelect_1 = "SELECT * FROM pre_suco WHERE id=1 ";
    $result_1 = $conexao->query($sqlSelect_1);
    if($result_1->num_rows > 0)
    {
        while($user_data_1 = mysqli_fetch_assoc($result_1))
        {
            $id_fk = $user_data_1['id_fk'];
            $nome = $user_data_1['nome'];
            $valor = $user_data_1['valor'];
        }

            // select_2_PRE_LIQUIDO
            $sqlSelect_2 = "SELECT * FROM pre_liquido WHERE id=1 ";
            $result_2 = $conexao->query($sqlSelect_2);

            if($result_2->num_rows > 0)
            {
                while($user_data_2 = mysqli_fetch_assoc($result_2))
                {
                    $liquido = $user_data_2['nome'];
                    $liquido_valor = $user_data_2['valor'];
                }
            

                // select_3_PRE_PREFERENCIA
                $sqlSelect_3 = "SELECT * FROM pre_preferencia WHERE id=1 ";
                $result_3 = $conexao->query($sqlSelect_3);

                if($result_3->num_rows > 0)
                {
                    while($user_data_3 = mysqli_fetch_assoc($result_3))
                    {
                        $preferencia = $user_data_3['nome'];
                    }



                    // select_4_PRE_ACRESCIMO
                    $sqlSelect_4 = "SELECT * FROM pre_acrescimo WHERE id=1 ";
                    $result_4 = $conexao->query($sqlSelect_4);
                    
                    if($result_4->num_rows > 0)
                    {
                        while($user_data_4 = mysqli_fetch_assoc($result_4))
                        {
                            $acrescimo = $user_data_4['nome'];
                            $valor_acrescimo = $user_data_4['valor'];
                        }
                    }

                        $valor_suco = $valor + $liquido_valor;

                        $result = mysqli_query($conexao, "INSERT INTO pagar_pedido (id, id_fk, nome, valor, liquido, preferencia, acrescimo, valor_acrescimo) VALUES ('defalt', '$id_fk', '$nome', '$valor_suco', '$liquido', '$preferencia','$acrescimo', '$valor_acrescimo') ");

                        $sqlDelete_1 = "DELETE FROM pre_suco";
                        $result_Delete_1 = $conexao->query($sqlDelete_1);

                        $sqlDelete_2 = "DELETE FROM pre_liquido";
                        $result_Delete_2 = $conexao->query($sqlDelete_2);
        
                        $sqlDelete_3 = "DELETE FROM pre_preferencia";
                        $result_Delete_3 = $conexao->query($sqlDelete_3);
        
                        $sqlDelete_4 = "DELETE FROM pre_acrescimo";
                        $result_Delete_4 = $conexao->query($sqlDelete_4);
                        
                        header('Location: ../Pagar.php');
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