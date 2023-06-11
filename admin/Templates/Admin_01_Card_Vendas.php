<?php
    include_once('../config.php');

    $table = '07_select_vendas';

    $sql = "SELECT * FROM $table";
    $result = $conexao->query($sql);

    echo "<ul class='container'>";
        $id_2 = 0;
        while($user_data = mysqli_fetch_assoc($result)) {
            $id = $user_data['id_venda'];
            $nome = $user_data['nome'];

            if($id != $id_2) {
            
                $id_2 = $user_data['id_venda'];
                $dia = $user_data['dia'];
                $hora = $user_data['hora'];
                $valor = $user_data['valor'];

                $sql_6 = "SELECT SUM(valor) as subtotal FROM $table WHERE id_venda='$id'";
                $sql_6 = $conexao->query($sql_6);
                $row = $sql_6->fetch_assoc();
                $soma_suco = $row['subtotal'];
            
                $sql_7 = "SELECT SUM(valor_acrescimo) as subtotalacrescimo FROM $table WHERE id_venda='$id'";
                $sql_7 = $conexao->query($sql_7);
                $row = $sql_7->fetch_assoc();
                $soma_acrescimo = $row['subtotalacrescimo'];
            
                $soma_valor_total = $soma_suco + $soma_acrescimo;
                $soma_suco = number_format($soma_suco, 2, '.', '');
                $soma_acrescimo = number_format($soma_acrescimo, 2, '.', '');
                $soma_valor_total = number_format($soma_valor_total, 2, '.', '');

                echo "<li>";
                echo "<input type='radio' name='$table' id ='$table $id'  />";   
                echo "<label for='$table $id' class='card'>
                <div class='content'>
                    <h2>$id</h2>
                    <h3>$dia</h3>
                    <p>$hora</p>
                    <a href='venda_aberta.php?id_venda=$id' class='estoque'>R$ $soma_valor_total
                    
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' id='add_estoque' viewBox='0 0 16 16'>
  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
</svg>
                    </a>
                </div>
                </label>";
                echo "</li>";
            }
        }
    echo "</ul>"; 
?>

