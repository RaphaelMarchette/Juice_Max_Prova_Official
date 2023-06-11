<?php

    include_once('../config.php');

    $sql_6 = "SELECT SUM(valor) as subtotal FROM 13_pre_venda";
    $sql_6 = $conexao->query($sql_6);
    $row = $sql_6->fetch_assoc();
    $soma_suco = $row['subtotal'];

    $sql_7 = "SELECT SUM(valor_acrescimo) as subtotalacrescimo FROM 13_pre_venda";
    $sql_7 = $conexao->query($sql_7);
    $row = $sql_7->fetch_assoc();
    $soma_acrescimo = $row['subtotalacrescimo'];

    $soma_valor_total = $soma_suco + $soma_acrescimo;
?>

<?php
    if(!empty($_GET['pago']))
    {
        $pago = $_GET['pago'];

        if($pago <= 0)
        {
            $pago = 0;
            $troco = 0;
        }
        else
        {
            // $soma_valor_total = number_format($soma_valor_total, 2, '.', '');
            // $pago = number_format($pago, 2, '.', '');

            $troco = $pago - $soma_valor_total;
        }
    }
    else
    {
        $pago = 0;
        $troco = 0;
    }

    $soma_suco = number_format($soma_suco, 2, '.', '');
    $soma_acrescimo = number_format($soma_acrescimo, 2, '.', '');
    $soma_valor_total = number_format($soma_valor_total, 2, '.', '');
    $pago = number_format($pago, 2, '.', '');
    $troco = number_format($troco, 2, '.', '');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="Static_1/Scripts/View.js" defer></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


<table id="table_sub_total">
    <thead>
        <tr>
            <th class="title_table" >Sub Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo "<tr>";
                echo "<td class='espaco'></td>";
                echo "<td class='nome'>Sucos</td>";
                echo "<td class='rs'>R$</td>";
                echo "<td class='valor_g'>".$soma_suco."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td class='espaco'></td>";
                echo "<td class='nome'>Acrescimos</td>";
                echo "<td class='rs'>R$</td>";
                echo "<td class='valor_g'>".$soma_acrescimo."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td class='espaco'></td>";
                echo "<td class='nome'>Total</td>";
                echo "<td class='rs'>R$</td>";
                echo "<td class='valor_g'>".$soma_valor_total."</td>";
            echo "</tr>";
        ?>

        <tr>
            <td class='espaco'></td>
            <td class='nome'>Pago</td>
            <td class='rs'>R$</td>
            <td class='valor_g'><input type="text" id="money" name="money" placeholder="0.00" aria-label="Valor" aria-describedby="basic-addon1" value=<?php echo $pago;?>  maxlength="5" required></td>
        </tr>

        <?php
            echo "<tr>";
                echo "<td class='espaco'></td>";
                echo "    <td class='nome' for='rs'>Troco</td>";
                echo "    <td class='rs'>R$</td>";
                echo "    <td class='valor_g'>".$troco."</td>";
            echo "</tr>";
        ?>
    </tbody>
</table>

<?php
    echo "<a href='Tools/Tools_Add_Vendas_Uni.php?total=$soma_valor_total&pago=$pago' title='Finalizar' id='bt_fazer_pedido'>Finalizar</a>"
?>

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