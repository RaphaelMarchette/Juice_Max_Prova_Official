<?php
    if(!empty($_GET['table']))
    {
        include_once('../../config.php');

        $table_Delete = $_GET['table'];

        $id = $_GET['id'];

        $sqlDelete = "DELETE FROM $table_Delete WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header("location: ../Pagar.php");
   
?>