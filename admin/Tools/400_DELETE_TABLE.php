<?php
    if(!empty($_GET['table_Delete']))
    {
        include_once('../../config.php');

        $table_Delete = $_GET['table_Delete'];

        $id_Delete = $_GET['id_Delete'];

        $page = '../Pagar.php';

        $sqlDelete = "DELETE FROM $table_Delete WHERE id = $id_Delete ";
        $resultDelete = $conexao->query($sqlDelete);

    }
    header("location: {$page}");
?>