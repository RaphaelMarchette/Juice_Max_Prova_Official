<?php
    $table = 'select_frutas';

    $table_Insert = 'pre_fruta';

    include_once('../config.php');

    $sql = "SELECT * FROM $table";
    $result = $conexao->query($sql);

    echo "<ul class='container'>"; 

        while($user_data = mysqli_fetch_assoc($result)) {
            $id = $user_data['id'];
            $nome = $user_data['nome'];

            if(isset($user_data['valor'])){
                $valor = $user_data['valor'];
            }

            if(isset($user_data['estoque'])){
                $estoque = $user_data['estoque'];
            }

            if(isset($user_data['senha'])){
                $senha = $user_data['senha'];
            }

            if($table != 'select_sucos')
            {
                $img = $nome.".png";
                include_once('../config_upload.php');
                $sql_img = "SELECT * FROM arquivos WHERE nome='$img' ";
                $result_img = $conexao_upload->query($sql_img);

                while($user_data_img = mysqli_fetch_assoc($result_img)) {
                    $path = $user_data_img['path'];
                    $path = $pasta_static.$path;

                    echo "<li>";
                        echo "<input type='radio' name='$table' id ='$table $id' />";   
                        echo "<label for='$table $id' class='card'>
                            <div class='content'>
                                <h2>$id</h2>
                                <h3>$nome</h3>
                                <img src='$path' </img>";

                                if($table != 'select_admins' ){
                                    echo"<p>R$ $valor</p>";
                                }

                                if($table != 'select_admins'){
                                    echo" <a>$estoque Kg
                                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-plus-circle' id='add_estoque' viewBox='0 0 16 16'>
                                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                                            <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                                        </svg>
                                    </a>";
                                }

                                if($table == 'select_admins'){
                                    echo"<img class='img_redonda' src='$path' </img>
                                    <a>Senha: $senha";
                                }
                }
            }
            else{
                echo "<li>";
                    echo "<input type='radio' name='$table' id ='$table $id' />";   
                    echo "<label for='$table $id' class='card'>
                        <div class='content'>
                            <h2>$id</h2>
                            <h3>$nome</h3>
                            <p>R$ $valor</p>
                            <a>$estoque Kg
                                    <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-plus-circle' id='add_estoque' viewBox='0 0 16 16'>
                                        <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                                        <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                                    </svg>
                                </a>";
                            }


                            echo"</div>
                        </label>
                </li>";
        }





        echo "<li>";
            echo "<input type='radio' name='$table' id ='$table add' />";   
            echo "<label for='$table add' class='card_add'>
                <div class='content'>
                    <h3>
                        <svg xmlns='http://www.w3.org/2000/svg' width='60' height='60' fill='currentColor' class='bi bi-plus-circle' id='add_card' viewBox='0 0 16 16'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                            <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                        </svg>
                    </h3>
                </div>
            </label>";
        echo "</li>";
    echo "</ul>";
?>