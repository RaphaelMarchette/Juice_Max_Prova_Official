<?php
    if(!empty($_GET['pago']))
    {
        $pago = $_GET['pago'];
        $total = $_GET['total'];

        if($pago >= $total and $pago > 0 )
        {
            date_default_timezone_set('America/Sao_Paulo');
            $dia = date('Y-m-d');
            $hora = date('H:i:s');

            include_once('../../config.php');

            $sql_2 = "SELECT * FROM 13_pre_venda";
            $result_Select_2 = $conexao->query($sql_2);

            if($result_Select_2->num_rows > 0)
            {
                include('contagem.php');

                while($user_data = mysqli_fetch_assoc($result_Select_2))
                {
                    $id = $user_data['id'];
                    $id_fk = $user_data['id_fk'];
                    $nome = $user_data['nome'];
                    $liquido = $user_data['liquido'];
                    $preferencia = $user_data['preferencia'];
                    $valor = $user_data['valor'];
                    $acrescimo = $user_data['acrescimo'];
                    $valor_acrescimo = $user_data['valor_acrescimo'];

                    $id_venda = $contagem;

                    $sql_Insert = "INSERT INTO 07_select_vendas (id, id_venda, dia, hora, id_suco, nome, liquido, preferencia, valor, acrescimo, valor_acrescimo) VALUES ('default', '$id_venda', '$dia', '$hora', '$id_fk','$nome', '$liquido', '$preferencia', '$valor', '$acrescimo', '$valor_acrescimo') ";
                    $result_Insert = $conexao->query($sql_Insert);

                    $sqlDelete = "DELETE FROM 13_pre_venda";
                    $result_Delete = $conexao->query($sqlDelete);

                    file_put_contents('contagem.php', '<?php $contagem='.((int)$contagem+1).' ?>');

                    header('Location:../Pagar.php?ok=1');
                }
            }
            else
            {
                header('Location: ../Pagar.php');
            }
        }
        else
        {
            header('Location: ../Pagar.php');
        }
    }
    else
    {
        header('Location: ../Pagar.php');
    }
?>