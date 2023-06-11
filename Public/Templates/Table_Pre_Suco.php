<?php
    include_once('../config.php');

    $table = '09_pre_venda_suco';

    $sql = "SELECT * FROM $table WHERE id=1";

    $result = $conexao->query($sql);

    $table_Delete = $table;
    $table_Delete_2 = '10_pre_venda_liquido';
?>

<table class="table" id="table_view_suco">
    <thead>
        <tr>
            <th class="title_table" >Suco à ser Adicionado</th>
        </tr>
        <tr>
            <th class="id">Id</th>
            <th class="nome">Nome</th>
            <th class="valor">Valor</th>
            <th class="preenche"   >   </th>
            <th class="botao"   >...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='id'>".$user_data['id_fk']."</td>";
                echo "<td class='nome'>".$user_data['nome']."</td>";
                echo "<td class='valor'>".$user_data['valor']."</td>";
                echo    "<td class='preenche'></td>";    
                echo "<td class='botao'>
                    <a href='tools/CRUD_Delete_suco_Pedir.php?table_Delete=$table_Delete&table_Delete_2=$table_Delete_2' title='Deletar' id='btn-danger'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                    </a>
                    </td>";
                echo "</tr>";
            }
            ?>
    </tbody>
</table>

