<?php
    include_once('../config.php');

    $sql = "SELECT * FROM $table";
    $result = $conexao->query($sql);

    echo "<ul class='container'>"; 

    if($table == '04_select_sucos')
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $id_select_sucos = $user_data['id'];
            $trading_name = $user_data['trading_name'];
            $ingredientes = $user_data['ingredientes'];
    
            $fruta_1_id_fk = $user_data['id_fk_fruta_1'];
            $fruta_2_id_fk = $user_data['id_fk_fruta_2'];
            $fruta_3_id_fk = $user_data['id_fk_fruta_3'];
            $fruta_4_id_fk = $user_data['id_fk_fruta_4'];
            $fruta_5_id_fk = $user_data['id_fk_fruta_5'];
    
            $peso_1_id_fk = $user_data['id_fk_peso_1'];
            $peso_2_id_fk = $user_data['id_fk_peso_2'];
            $peso_3_id_fk = $user_data['id_fk_peso_3'];
            $peso_4_id_fk = $user_data['id_fk_peso_4'];
            $peso_5_id_fk = $user_data['id_fk_peso_5'];
    
            $id_fk_liquido = $user_data['id_fk_liquido'];
            $id_fk_peso_liquido = $user_data['id_fk_peso_liquido'];
            // include "04_Select_Sucos_2.php";

            // include "Tools/605_Tools_Calc_Valor_Suco.php";
            $lista_id_frutas = array($fruta_1_id_fk, $fruta_2_id_fk, $fruta_3_id_fk, $fruta_4_id_fk, $fruta_5_id_fk);

            $tam_lista_id = 0;
        
            foreach ($lista_id_frutas as &$id_fruta_fk) {
                if(!empty($id_fruta_fk))
                {
                    $tam_lista_id += 1;
                }
            }
        
            $lista_peso_frutas= array($peso_1_id_fk, $peso_2_id_fk, $peso_3_id_fk, $peso_4_id_fk, $peso_5_id_fk);
        
            list($a[1], $a[2], $a[3], $a[4], $a[5]) = $lista_peso_frutas;
        
            $nome_completo = '';
            $valor_suco = 0;
            $i = 0;
        
            foreach ($lista_id_frutas as &$id_fruta_fk) {
                if(!empty($id_fruta_fk))
                {
                    $i += 1;
                    $table_Select = '01_select_frutas';
                    $id_Select = $id_fruta_fk;
                    include "Tools/$table_Select.php";
                    //_______________________________________________________
                    $table_Select = '02_select_pesos';
                    $id_Select = $a[$i];
                    include "Tools/$table_Select.php";
                    //________________________________________________________
                    $valor_suco_uni = ($select_frutas_valor * $select_pesos_valor);
                    $valor_suco += $valor_suco_uni;
                    $valor_suco_uni = number_format($valor_suco_uni, 2, '.', '');
                    $valor_suco = number_format($valor_suco, 2, '.', '');
                }
            }
            //________________________________________________________
            $table_Select = '03_Select_liquidos';
            $id_Select = $id_fk_liquido;
            include "Tools/$table_Select.php";
            //________________________________________________________
            $table_Select = '02_select_pesos';
            $id_Select = $id_fk_peso_liquido;
            include "Tools/$table_Select.php";
            //________________________________________________________

            $pre_venda_liquido_valor = $select_liquidos_valor * $select_pesos_valor;

            if($id_fk_liquido == 1)
            {
                $pre_venda_liquido_valor = $valor_suco;
            }
        
            $valor_total_suco = $valor_suco + $pre_venda_liquido_valor;

            $pre_venda_liquido_valor = number_format($pre_venda_liquido_valor, 2, '.', '');
            $valor_total_suco = number_format($valor_total_suco, 2, '.', '');

            // echo"$id_fk_liquido";
            // echo"<p>____</p>";
            // echo"$select_liquidos_nome";
            // echo"<p>____</p>";
            // echo"$select_liquidos_valor";
            // echo"<p>__*__</p>";
            // echo"$select_pesos_valor";
            // echo"<p>__=__</p>";
            // echo"$pre_venda_liquido_valor";
            // echo"<p>__+__</p>";
            // echo"$valor_suco";

            echo "<li>";
                echo "<input type='radio' name='$table' id ='$table $id_select_sucos' />";   
                echo "<label for='$table $id_select_sucos' class='card'>
                    <div class='content'>
                        <h2>$id_select_sucos</h2>
                        <h3>$trading_name</h3>
                        <p>$select_liquidos_nome</p>
                        <a class='estoque'>R$ $valor_total_suco</a>
                    </div>
                    </label>
            </li>";
        }
    }

    if($table != '04_select_sucos')
    {
        while($user_data = mysqli_fetch_assoc($result)) {
            $id = $user_data['id'];

            if(isset($user_data['nome'])){
                $nome = $user_data['nome'];
            }

            if(isset($user_data['valor'])){
                $valor = $user_data['valor'];
            }

            if(isset($user_data['estoque'])){
                $estoque = $user_data['estoque'];
            }

            if(isset($user_data['senha'])){
                $senha = $user_data['senha'];
            }

                $img = $nome.".png";
                $path = $pasta_static.'img/frutas/'.$img;

                    echo "<li>";
                        echo "<input type='radio' name='$table' id ='$table $id' />";   
                        echo "<label for='$table $id' class='card'>
                            <div class='content'>
                                <h2>$id</h2>
                                <h3>$nome</h3>";
                                if($table != '08_select_admins' ){
                                    echo"<img src='$path' </img>
                                    <p>R$ $valor</p>";
                                }
                                if($table != '08_select_admins'){
                                    echo" <a class='estoque'>$estoque Kg
                                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-plus-circle' id='add_estoque' viewBox='0 0 16 16'>
                                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                                            <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                                        </svg>
                                    </a>";
                                }
                                if($table == '08_select_admins'){
                                    echo"<img class='img_redonda' src='$path' </img>
                                    <a>Senha: $senha</a>";
                                }
                                echo"</div>
                                </label>
                        </li>";
        }
    }
        echo "<li>";
            echo "<input type='radio' name='$table' id ='$table add' />";   
            echo "<label for='$table add' class='card_add'>
                <div class='content'>
                    ";

                    if($table == '04_select_sucos')
                    {
                        echo "<a href='New.php' title='Add_Suco'>";
                    }
                    if($table != '04_select_sucos')
                    {
                        echo "<a href='' title='Adicionar'>";
                    }


                    echo "<a href='New.php' title='Add_Suco'><h3>";
                    echo "<svg xmlns='http://www.w3.org/2000/svg' width='60' height='60' fill='currentColor' class='bi bi-plus-circle' id='add_card' viewBox='0 0 16 16'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                            <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                        </svg>
                        </h3>
                        </a>
                    
                </div>
            </label>
        </li>";

    echo "</ul>";
?>