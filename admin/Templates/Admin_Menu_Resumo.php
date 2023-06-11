<?php
    include_once('../config.php');

    $sql_6 = "SELECT SUM(valor) as subtotal FROM 07_select_vendas";
    $sql_6 = $conexao->query($sql_6);
    $row = $sql_6->fetch_assoc();
    $soma_suco = $row['subtotal'];

    $sql_7 = "SELECT SUM(valor_acrescimo) as subtotalacrescimo FROM 07_select_vendas";
    $sql_7 = $conexao->query($sql_7);
    $row = $sql_7->fetch_assoc();
    $soma_acrescimo = $row['subtotalacrescimo'];

    $soma_valor_total = $soma_suco + $soma_acrescimo;
    $soma_suco = number_format($soma_suco, 2, '.', '');
    $soma_acrescimo = number_format($soma_acrescimo, 2, '.', '');
    $soma_valor_total = number_format($soma_valor_total, 2, '.', '');
?>

<table id="table_resumo">
    <tbody>
        <?php
            include('../Public/Tools/contagem.php');
            $nv = $contagem-1;
            $nv  = sprintf("%06s",$nv);
            echo "<tr>";
                echo "<td class='espaco table_col_cor'></td>";
                echo "<td class='table_col_12vw table_col_cor'>Nº Vendas</td>";
                echo "<td class='table_col_6vw'>".$nv."</td>";
                echo "</tr>";
            echo "<tr>";
                echo "<td class='espaco table_col_cor'></td>";
                echo "<td class='table_col_6vw table_col_cor'>Sucos</td>";
                echo "<td class='table_col_6vw'>R$</td>";
                echo "<td class='table_col_6vw'>".$soma_suco."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td class='espaco table_col_cor'></td>";
                echo "<td class='table_col_6vw table_col_cor'>Acres.</td>";
                echo "<td class='table_col_6vw'>R$</td>";
                echo "<td class='table_col_6vw'>".$soma_acrescimo."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td class='espaco table_col_cor'></td>";
                echo "<td class='table_col_6vw table_col_cor'>Total</td>";
                echo "<td class='table_col_6vw'>R$</td>";
                echo "<td class='table_col_6vw'>".$soma_valor_total."</td>";
            echo "</tr>";
        ?>
    </tbody>
</table>







<script>
    pago = document.getElementById('money');
    if(pago.value == 0){
        pago.value='';
        document.getElementById('money').focus();
    }
</script>


<script>
    var pago = document.getElementById('money');

    pago.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            pagoData();
        }
    });

    function pagoData()
    {
        window.location = 'Pagar.php?pago='+pago.value;
    };
</script>