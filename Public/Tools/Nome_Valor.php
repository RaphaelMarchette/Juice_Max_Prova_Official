<?php
        include_once('../../config.php');

        for ($f=0; $f < 20; $f++) {

        $sql_Select = "SELECT * FROM 04_select_sucos WHERE id= $f";

        $result_Select = $conexao->query($sql_Select);

        if($result_Select->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result_Select))
            {
                $nome = $user_data['nome'];
                $liquido_id_fk = $user_data['liquido_id_fk'];
                $liquido_peso_fk = $user_data['liquido_peso'];

                $fruta_1_id_fk = $user_data['fruta_1'];
                $fruta_2_id_fk = $user_data['fruta_2'];
                $fruta_3_id_fk = $user_data['fruta_3'];
                $fruta_4_id_fk = $user_data['fruta_4'];
                $fruta_5_id_fk = $user_data['fruta_5'];

                $peso_1_id_fk = $user_data['peso_1'];
                $peso_2_id_fk = $user_data['peso_2'];
                $peso_3_id_fk = $user_data['peso_3'];
                $peso_4_id_fk = $user_data['peso_4'];
                $peso_5_id_fk = $user_data['peso_5'];

            }


            $lista_id_frutas = array($fruta_1_id_fk, $fruta_2_id_fk, $fruta_3_id_fk, $fruta_4_id_fk, $fruta_5_id_fk);

            $tam_lista_id = 0;

            foreach ($lista_id_frutas as &$id_fruta_fk) {
                if(!empty($id_fruta_fk))
                {
                    $tam_lista_id += 1;
                }
            }

            $lista_peso_frutas= array($peso_1_id_fk, $peso_2_id_fk, $peso_3_id_fk, $peso_4_id_fk, $peso_5_id_fk, $liquido_peso_fk);

            list($a[1], $a[2], $a[3], $a[4], $a[5], $a[6] ) = $lista_peso_frutas;
            
            $nome_completo = '';
            $valor_suco = 0;
            $soma_pesos = 0;
            $i = 0;
            $guarda_fruta = '';

            foreach ($lista_id_frutas as &$id_fruta_fk) {
                $i += 1;
                if(!empty($id_fruta_fk))
                {
                    $sql_Select_5 = "SELECT * FROM 01_select_frutas WHERE id='$id_fruta_fk' ";

                    $result_Select_5 = $conexao->query($sql_Select_5);
                
                    if($result_Select_5->num_rows > 0)
                        {
                            while($user_data_5 = mysqli_fetch_assoc($result_Select_5))
                            {
                                $fruta_nome = $user_data_5['nome'];
                                $fruta_valor = $user_data_5['valor'];
                            }
                        }

                    $sql_Select_6 = "SELECT * FROM 02_select_pesos WHERE id='$a[$i]' ";

                    $result_Select_6 = $conexao->query($sql_Select_6);
                
                    if($result_Select_6->num_rows > 0)
                        {
                            while($user_data_6 = mysqli_fetch_assoc($result_Select_6))
                            {
                                $peso_nome = $user_data_6['nome'];
                                $soma_pesos += $peso_nome;
                            }
                        }

                    $valor_suco_uni = ($fruta_valor * $peso_nome);

                    $sql_Select_7 = "SELECT * FROM 03_select_liquidos WHERE id='$liquido_id_fk' ";

                    $result_Select_7 = $conexao->query($sql_Select_7);
                
                    if($result_Select_7->num_rows > 0)
                        {
                            while($user_data_7 = mysqli_fetch_assoc($result_Select_7))
                            {
                                $liquido_nome = $user_data_7['nome'];
                                $liquido_valor = $user_data_7['valor'];
                            }
                        }

                        # NATURAL
                        if($liquido_id_fk == 1)
                        {
                            $nome_completo = "$fruta_nome";

                            $nome_completo = "$nome_completo $liquido_nome";
                        }

                        # AGUA
                        if($liquido_id_fk == 2)
                        {
                            if($tam_lista_id == 1)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                }

                            }
                            if($tam_lista_id == 2)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                }

                                if($i==2)
                                {
                                    $nome_completo = "$nome_completo com $fruta_nome";
                                }

                            }
                            if($tam_lista_id == 3)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                }

                                if($i==2)
                                {
                                    $nome_completo = "$nome_completo com $fruta_nome";
                                }

                                if($i==3)
                                {
                                    $nome_completo = "$nome_completo e $fruta_nome";
                                }

                            }
                            if($tam_lista_id == 4)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                }

                                if($i==2 or $i==3)
                                {
                                    $nome_completo = "$nome_completo, $fruta_nome";
                                }

                                if($i==4)
                                {
                                    $nome_completo = "$nome_completo e $fruta_nome";
                                }

                            }

                            if($tam_lista_id == 5)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                }

                                if($i==2 or $i==3 or $i==3)
                                {
                                    $nome_completo = "$nome_completo, $fruta_nome";
                                }

                                if($i==5)
                                {
                                    $nome_completo = "$nome_completo e $fruta_nome";
                                }

                            }

                        }




                        # LEITE LARANJA AGUA DE COCO
                        if(($liquido_id_fk == 3) or ($liquido_id_fk == 4) or ($liquido_id_fk == 5))
                        {

                            if($tam_lista_id == 1)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                    $nome_completo = "$nome_completo com $liquido_nome";
                                }
                            }

                            if($tam_lista_id == 2)
                            {

                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                    $guarda_fruta = "$nome_completo";
                                }

                                if($i==2)
                                {
                                    $nome_completo = "$nome_completo com $fruta_nome";
                                    $nome_completo = "$nome_completo e $liquido_nome";
                                }

                                if($liquido_id_fk == 3 & $guarda_fruta == $fruta_nome & $i==2)
                                {
                                    $nome_completo = "$fruta_nome Duplo";
                                }
                            }

                            if($tam_lista_id == 3)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                }

                                if($i==2)
                                {
                                    $nome_completo = "$nome_completo, $fruta_nome";
                                }

                                if($i==3)
                                {
                                    $nome_completo = "$nome_completo, $fruta_nome";
                                    $nome_completo = "$nome_completo e $liquido_nome";
                                }

                            }
                            if($tam_lista_id == 4)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                }

                                if($i==2 or $i==3)
                                {
                                    $nome_completo = "$nome_completo, $fruta_nome";
                                }

                                if($i==4)
                                {
                                    $nome_completo = "$nome_completo, $fruta_nome";
                                    $nome_completo = "$nome_completo e $liquido_nome";
                                }

                            }

                            if($tam_lista_id == 5)
                            {
                                if($i==1)
                                {
                                    $nome_completo = "$fruta_nome";
                                }

                                if($i==2 or $i==3 or $i==3)
                                {
                                    $nome_completo = "$nome_completo, $fruta_nome";
                                }

                                if($i==5)
                                {
                                    $nome_completo = "$nome_completo, $fruta_nome";
                                    $nome_completo = "$nome_completo e $liquido_nome";
                                }

                            }
                        }




                        $valor_suco += $valor_suco_uni;
                        $valor_suco = number_format($valor_suco, 2, '.', '');

                        echo "$fruta_nome = $valor_suco_uni ______ peso : $peso_nome <p> ";
                }

            }

            $sql_Select_7 = "SELECT * FROM 03_select_liquidos WHERE id='$liquido_id_fk' ";

            $result_Select_7 = $conexao->query($sql_Select_7);
        
            if($result_Select_7->num_rows > 0)
                {
                    while($user_data_7 = mysqli_fetch_assoc($result_Select_7))
                    {
                        $liquido_nome = $user_data_7['nome'];
                        $liquido_valor = $user_data_7['valor'];
                    }
                }

                
            $sql_Select_8 = "SELECT * FROM 02_select_pesos WHERE id='$liquido_peso_fk' ";

            $result_Select_8 = $conexao->query($sql_Select_8);
        
            if($result_Select_8->num_rows > 0)
                {
                    while($user_data_8 = mysqli_fetch_assoc($result_Select_8))
                    {
                        $liquido_peso = $user_data_8['nome'];
                    }
                }


            $sql_Select_9 = "SELECT * FROM 02_select_pesos WHERE id='$liquido_peso_fk' ";

            $result_Select_9 = $conexao->query($sql_Select_9);
        
            if($result_Select_9->num_rows > 0)
                {
                    while($user_data_9 = mysqli_fetch_assoc($result_Select_9))
                    {
                        $liquido_peso = $user_data_9['nome'];
                    }
                }

            $soma_pesos+= $liquido_peso ;
            $soma_pesos = number_format($soma_pesos, 3, '.', '');


            $valor_liquido = ($liquido_valor * $liquido_peso);
            $valor_liquido = number_format($valor_liquido, 2, '.', '');

            $valor_suco += $valor_liquido;
            $valor_suco = number_format($valor_suco, 2, '.', '');


            $valor_suco_uni = number_format($valor_suco_uni, 2, '.', '');

            echo "$liquido_nome = $valor_liquido ______ peso : $liquido_peso<p>";
            echo "<p> /</p>";
            echo "$nome_completo = $valor_suco ______ peso : $soma_pesos<p>";
            echo "____________________________________ <p>";
        }
    }
?>