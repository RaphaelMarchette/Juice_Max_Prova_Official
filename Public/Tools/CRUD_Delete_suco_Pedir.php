<?php

    if(!empty($_GET['table_Delete']))
    {
        include_once('../../config.php');

        $table_Delete = $_GET['table_Delete'];
        $table_Delete_2 = $_GET['table_Delete_2'];

        $page = '../Pedir.php';

        $sqlDelete = "DELETE FROM $table_Delete ";
        $resultDelete = $conexao->query($sqlDelete);

        $sqlDelete = "DELETE FROM $table_Delete_2 ";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header("location: {$page}");
   
?>