<?php
    include_once('../config.php');

    $table = '03_Select_liquidos';

    $sql = "SELECT * FROM $table";

    $result = $conexao->query($sql);

    $table_Insert = '10_pre_venda_liquido';

?>

<table class="table" id="table_select_liquidos">
    <thead>
        <tr>
            <th class="title_table" >Escolha um Liquido</th>
        </tr>
        <tr>
            <th class="id"          >Id     </th>
            <th class="nome"        >Nome   </th>
            <th class="valor"       >Valor   </th>
            <th class="preenche_tam" ></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($result->num_rows > 0)
            while($user_data = mysqli_fetch_assoc($result)) {
                    $fruta_nome = $user_data['nome'];
                    $fruta_valor = $user_data['valor'];
                    echo "<tr>";
                    echo "<td class='id'>".$user_data['id']."</td>";
                    echo "<td class='nome'>".$fruta_nome."</td>";
                    echo "<td class='valor'>".$fruta_valor."</td>";
                    echo    "<td class='preenche'></td>";   
                    echo "<td class='botao'>
                    <a href='tools/601_Tools_Add_Pre_Liquido.php?table_Select=$table&id_Select=$user_data[id]&table_Insert=$table_Insert' title='Marcar' id='btn-primary'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                        </a> 

                        </td>";
                    echo "</tr>";
            }
            ?>
    </tbody>
</table>
