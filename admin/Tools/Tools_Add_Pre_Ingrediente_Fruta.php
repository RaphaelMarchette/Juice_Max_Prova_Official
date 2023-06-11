<?php
    if(!empty($_GET['id_Select']))
    {
        include_once('../../config.php');

        $table_Select = $_GET['table_Select'];

        $id_Select = $_GET['id_Select'];

        $table_Insert = $_GET['table_Insert'];

        $sql_Select = "SELECT * FROM $table_Select WHERE id='$id_Select'";

        $result_Select = $conexao->query($sql_Select);

        $cont = 0;
        if($result_Select->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result_Select))
            {
                $nome = $user_data['nome'];
                $valor = $user_data['valor'];
                $cont += 1;
            }
            header('Location: ../new.php?ok=4');

            if($cont == 1)
            {
                $sql_Insert =  "INSERT INTO $table_Insert (id, id_fk, nome, valor) VALUES ('1', '$id_Select', '$nome', '$valor') ";
                $deu_certo = $conexao->query($sql_Insert)or die($conexao->error);
                if($deu_certo)
                    header('Location: ../new.php?ok=3');
            }
            else{
                header('Location: ../new.php?ok=4');
            }
        }
        else
        {
            header('Location: ../new.php?ok=4');
        }
    }
    else
    {
        header('Location: ../new.php?ok=4');
    }

?>
