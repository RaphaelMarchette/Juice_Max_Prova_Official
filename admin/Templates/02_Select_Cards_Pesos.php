<?php
    include_once('../config.php');

    $table = '02_select_pesos';

    $table_Insert = '15_pre_ingrediente_peso';

    $sql = "SELECT * FROM $table";
    $result = $conexao->query($sql);

    echo "<ul class='container'>"; 
        while($user_data = mysqli_fetch_assoc($result)) {
            $id = $user_data['id'];
            $peso = $user_data['valor'];

            if ($id > 0) {
            echo "<li>
                    <input type='radio' name='$table' id ='$table $id' />
                    <label for='$table $id' class='card'>
                        <div class='content'>
                            <h2>$id</h2>
                            <h3>$peso Kg</h3>";
                            echo " <a href='Tools/Tools_Add_Pre_Ingrediente_Peso.php?table_Select=$table&id_Select=$user_data[id]&table_Insert=$table_Insert' title='Lançar'>                        
                            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-plus-circle' id='add_estoque' viewBox='0 0 16 16'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                            <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                            </svg>
                        </a>";
            echo "</li>";
            }
                        echo"</div>
                    </label>";

        }
    echo "</ul>";
?>