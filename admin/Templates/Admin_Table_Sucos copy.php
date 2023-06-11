<?php
        include_once('../config.php');

        $sql_2 = "SELECT * FROM select_sucos ";
        $result_2 = $conexao->query($sql_2);

        echo "<ul class='container'>"; 
        while($user_data = mysqli_fetch_assoc($result_2)) {
            $id = $user_data['id'];
            $nome = $user_data['nome'];


            echo "<li>";
            echo "<input type='radio' name='frutas' id ='$id' />";   
            echo "<label for='$id' class='card'>
            <div class='content'>
                <h2>$id</h2>
                <h3>$nome</h3>
                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-plus-circle' id='add_estoque' viewBox='0 0 16 16'>
                    <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                    <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                </svg>
                </a>
            </div>
            </label>";

            echo "</li>";
        }
        echo "<li>"; 

        echo "<input type='radio' name='frutas' id ='add' />";   
        echo "<label for='add' class='card_add'>
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