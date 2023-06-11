<?php
    include_once('../config.php');

    $sql_6 = "SELECT SUM(peso) as pesototal FROM 17_pre_ingredientes";
    $sql_6 = $conexao->query($sql_6);
    $row = $sql_6->fetch_assoc();
    $soma = $row['pesototal'];
    $soma_peso = number_format($soma, 3, '.', '');
    $peso = 0.500 - $soma_peso;
    $peso_do_liquido = number_format($peso, 3, '.', '');
?>