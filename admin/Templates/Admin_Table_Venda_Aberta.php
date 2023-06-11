<table>
<?php
        include_once('../config.php');

        $sql_2 = "SELECT * FROM admin_vendas_uni";
        $result_2 = $conexao->query($sql_2);

        echo "<ul class='container_vendas'>";
        $id_2 = 0;
        while($user_data = mysqli_fetch_assoc($result_2)) {
            $id = $user_data['id_venda_uni'];
            $nome = $user_data['nome'];

            if($id != $id_2) {
            
            $id_2 = $user_data['id_venda_uni'];
            $dia = $user_data['dia'];
            $hora = $user_data['hora'];
            $valor = $user_data['valor'];

            $sql_6 = "SELECT SUM(valor) as subtotal FROM admin_vendas_uni WHERE id_venda_uni='$id'";
            $sql_6 = $conexao->query($sql_6);
            $row = $sql_6->fetch_assoc();
            $soma_suco = $row['subtotal'];
        
            $sql_7 = "SELECT SUM(valor_acrescimo) as subtotalacrescimo FROM admin_vendas_uni WHERE id_venda_uni='$id'";
            $sql_7 = $conexao->query($sql_7);
            $row = $sql_7->fetch_assoc();
            $soma_acrescimo = $row['subtotalacrescimo'];
        
            $soma_valor_total = $soma_suco + $soma_acrescimo;
            $soma_suco = number_format($soma_suco, 2, '.', '');
            $soma_acrescimo = number_format($soma_acrescimo, 2, '.', '');
            $soma_valor_total = number_format($soma_valor_total, 2, '.', '');


            echo "<li>";
            echo "<input type='radio' name='frutas' id ='$id'  />";   
            echo "<label for='$id' class='card'>
            <div class='content'>
                <h1>$id</h1>
                <h4>$id</h4>
                <h2>$id</h2>
                <h3>$dia</h3>
                <p>$hora</p>
                <a href='venda_aberta.php?id_venda=$id' >R$ $soma_valor_total</a>
            </div>
            </label>";
            echo "</li>";
        }
    }

        echo "</ul>"; 
    ?>



</table>