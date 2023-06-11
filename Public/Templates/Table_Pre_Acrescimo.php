<?php
    include_once('../config.php');

    $table = '12_pre_venda_acrescimo';

    $sql = "SELECT * FROM $table WHERE id=1";

    $result = $conexao->query($sql);

?>

<table class="table" id="table_view_acrescimo">
    <thead>
        <tr>
            <th class="title_table" >Acréscimo à ser Adicionado</th>
        </tr>          
        <tr>
            <th class="id">Id</th>
            <th class="nome">Nome</th>
            <th class="valor">Valor</th>
            <th class="preenche"></th>
            <th class="botao">
                <a href='Pedir_Select_Acrescimos.php' title='Adicionar' id='btn-primary'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-square' viewBox='0 0 16 16'>
                        <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                        <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                    </svg>
                </a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td class='id'>".$user_data['id_fk']."</td>";
                echo "<td class='nome'>".$user_data['nome']."</td>";
                echo "<td class='valor'>".$user_data['valor']."</td>";
                echo "<td class='preenche'></td>";    
                echo "<td class='botao'>
                        <a href='Tools/CRUD_Delete_Pedir.php?table_Delete=$table' title='Deletar' id='btn-danger'>
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
