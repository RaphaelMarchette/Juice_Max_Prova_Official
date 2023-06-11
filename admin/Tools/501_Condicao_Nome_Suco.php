<?php
        # NATURAL
        if($liquido_id_fk == 1)
        {
            $nome_completo = "$select_frutas_nome";

            $nome_completo = "$nome_completo $liquido_nome";
        }

        # AGUA
        if($liquido_id_fk == 2)
        {
            if($tam_lista_id == 1)
            {
                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                }

            }
            if($tam_lista_id == 2)
            {
                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                }

                if($i==2)
                {
                    $nome_completo = "$nome_completo com $select_frutas_nome";
                }

            }
            if($tam_lista_id == 3)
            {
                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                }

                if($i==2)
                {
                    $nome_completo = "$nome_completo com $select_frutas_nome";
                }

                if($i==3)
                {
                    $nome_completo = "$nome_completo e $select_frutas_nome";
                }

            }
            if($tam_lista_id == 4)
            {
                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                }

                if($i==2 or $i==3)
                {
                    $nome_completo = "$nome_completo, $select_frutas_nome";
                }

                if($i==4)
                {
                    $nome_completo = "$nome_completo e $select_frutas_nome";
                }

            }

            if($tam_lista_id == 5)
            {
                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                }

                if($i==2 or $i==3 or $i==3)
                {
                    $nome_completo = "$nome_completo, $select_frutas_nome";
                }

                if($i==5)
                {
                    $nome_completo = "$nome_completo e $select_frutas_nome";
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
                    $nome_completo = "$select_frutas_nome";
                    $nome_completo = "$nome_completo com $liquido_nome";
                }
            }
            if($tam_lista_id == 2)
            {

                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                    $guarda_fruta = "$nome_completo";
                }

                if($i==2)
                {
                    $nome_completo = "$nome_completo com $select_frutas_nome";
                    $nome_completo = "$nome_completo e $liquido_nome";
                }

                if($liquido_id_fk == 3 & $guarda_fruta == $select_frutas_nome & $i==2)
                {
                    $nome_completo = "$select_frutas_nome Duplo";
                }
            }
            if($tam_lista_id == 3)
            {
                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                }

                if($i==2)
                {
                    $nome_completo = "$nome_completo, $select_frutas_nome";
                }

                if($i==3)
                {
                    $nome_completo = "$nome_completo, $select_frutas_nome";
                    $nome_completo = "$nome_completo e $liquido_nome";
                }
            }
            if($tam_lista_id == 4)
            {
                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                }

                if($i==2 or $i==3)
                {
                    $nome_completo = "$nome_completo, $select_frutas_nome";
                }

                if($i==4)
                {
                    $nome_completo = "$nome_completo, $select_frutas_nome";
                    $nome_completo = "$nome_completo e $liquido_nome";
                }
            }
            if($tam_lista_id == 5)
            {
                if($i==1)
                {
                    $nome_completo = "$select_frutas_nome";
                }

                if($i==2 or $i==3 or $i==3)
                {
                    $nome_completo = "$nome_completo, $select_frutas_nome";
                }

                if($i==5)
                {
                    $nome_completo = "$nome_completo, $select_frutas_nome";
                    $nome_completo = "$nome_completo e $liquido_nome";
                }
            }
        }
?>
