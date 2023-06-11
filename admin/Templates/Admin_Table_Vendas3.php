<?php
    if(!empty($_GET['id_venda']))
    {
        $id_venda = $_GET['id_venda'];

        include_once('../config.php');

        $sql_2 = "SELECT * FROM 07_select_vendas WHERE id_venda=$id_venda";
        $result_2 = $conexao->query($sql_2);

        echo "<ul class='container'>";

        while($user_data = mysqli_fetch_assoc($result_2)) {
            $dia = $user_data['dia'];
            $hora = $user_data['hora'];
            $id_fk = $user_data['id_suco'];
            $nome = $user_data['nome'];
            $liquido = $user_data['liquido'];
            $preferencia = $user_data['preferencia'];
            $valor = $user_data['valor'];
            $acrescimo = $user_data['acrescimo'];
            $valor_acrescimo = $user_data['valor_acrescimo'];


            echo "<li>";
            echo "<label class='card'>
            <div class='content'>
                <h2>    $id_venda</h2>
                <div>   $dia</div>
                <div>   $hora</div>
                <div>   id Suco: $id_fk</div>
                <div>   nome: $nome</div>
                <div>   liquido: $liquido</div>
                <div>   preferencia: $preferencia</div>
                <div>   valor: $valor</div>
                <div>   acrescimo: $acrescimo</div>
                <div>   valor acrescimo: $valor_acrescimo</div>
            </div>
            </label>";
            echo "</li>";
    }

        echo "</ul>"; 


    }
    else
    {
        header('Location: admin.php');
    }
?>
