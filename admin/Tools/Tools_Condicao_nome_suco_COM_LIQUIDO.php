<?php
    # NATURAL
    if($liquido_id_fk == 1)
    {
        $nome_completo = "$fruta_nome";

        $nome_completo = "$nome_completo $liquido_nome";
    }

    # AGUA
    if($liquido_id_fk == 2)
    {
        if($tam_lista_id == 1)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
            }

        }
        if($tam_lista_id == 2)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
            }

            if($i==2)
            {
                $nome_completo = "$nome_completo com $fruta_nome";
            }

        }
        if($tam_lista_id == 3)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
            }

            if($i==2)
            {
                $nome_completo = "$nome_completo com $fruta_nome";
            }

            if($i==3)
            {
                $nome_completo = "$nome_completo e $fruta_nome";
            }

        }
        if($tam_lista_id == 4)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
            }

            if($i==2 or $i==3)
            {
                $nome_completo = "$nome_completo, $fruta_nome";
            }

            if($i==4)
            {
                $nome_completo = "$nome_completo e $fruta_nome";
            }

        }

        if($tam_lista_id == 5)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
            }

            if($i==2 or $i==3 or $i==3)
            {
                $nome_completo = "$nome_completo, $fruta_nome";
            }

            if($i==5)
            {
                $nome_completo = "$nome_completo e $fruta_nome";
            }

        }

    }


    # LEITE LARANJA AGUA DE COCO
    if(($liquido_id_fk == 3) or ($liquido_id_fk == 4) or ($liquido_id_fk == 5))
    {

        if($tam_lista_id == 1)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
                $nome_completo = "$nome_completo com $liquido_nome";
            }
        }

        if($tam_lista_id == 2)
        {

            if($i==1)
            {
                $nome_completo = "$fruta_nome";
                $guarda_fruta = "$nome_completo";
            }

            if($i==2)
            {
                $nome_completo = "$nome_completo com $fruta_nome";
                $nome_completo = "$nome_completo e $liquido_nome";
            }

            if($liquido_id_fk == 3 & $guarda_fruta == $fruta_nome & $i==2)
            {
                $nome_completo = "$fruta_nome Duplo";
            }
        }

        if($tam_lista_id == 3)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
            }

            if($i==2)
            {
                $nome_completo = "$nome_completo, $fruta_nome";
            }

            if($i==3)
            {
                $nome_completo = "$nome_completo, $fruta_nome";
                $nome_completo = "$nome_completo e $liquido_nome";
            }

        }
        if($tam_lista_id == 4)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
            }

            if($i==2 or $i==3)
            {
                $nome_completo = "$nome_completo, $fruta_nome";
            }

            if($i==4)
            {
                $nome_completo = "$nome_completo, $fruta_nome";
                $nome_completo = "$nome_completo e $liquido_nome";
            }

        }

        if($tam_lista_id == 5)
        {
            if($i==1)
            {
                $nome_completo = "$fruta_nome";
            }

            if($i==2 or $i==3 or $i==3)
            {
                $nome_completo = "$nome_completo, $fruta_nome";
            }

            if($i==5)
            {
                $nome_completo = "$nome_completo, $fruta_nome";
                $nome_completo = "$nome_completo e $liquido_nome";
            }
        }
    }


    $valor_suco += $valor_suco_uni;
    $valor_suco = number_format($valor_suco, 2, '.', '');

    echo "$fruta_nome = $valor_suco_uni ______ peso : $peso_nome <p> ";


    $soma_pesos+= $liquido_peso ;
    $soma_pesos = number_format($soma_pesos, 3, '.', '');


    $valor_liquido = ($liquido_valor * $liquido_peso);
    $valor_liquido = number_format($valor_liquido, 2, '.', '');

    $valor_suco += $valor_liquido;
    $valor_suco = number_format($valor_suco, 2, '.', '');


    $valor_suco_uni = number_format($valor_suco_uni, 2, '.', '');

    echo "$liquido_nome = $valor_liquido ______ peso : $liquido_peso<p>";
    echo "<p> /</p>";
    echo "$nome_completo = $valor_suco ______ peso : $soma_pesos<p>";
    echo "____________________________________ <p>";

?>