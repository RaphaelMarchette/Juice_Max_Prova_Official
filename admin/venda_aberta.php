<?php include 'admin.php' ?>

<?php
    if(!empty($_GET['id_venda']))
    {
        include_once('../config.php');

        include 'Templates/Admin_Table_Vendas3.php';

    }
    else
    {
        header('Location: admin.php');
    }

?>
