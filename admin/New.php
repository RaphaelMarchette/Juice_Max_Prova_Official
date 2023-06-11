<?php include 'Templates/Admin_Logado.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <?php
        include_once('../config.php');

        echo "<link rel='stylesheet' href='$pasta_static/css/Table.css'/>";

        echo "<link rel='stylesheet' href='$pasta_static/css/Card_Select.css' />";

        echo "<script src='$pasta_static/Scripts/View.js' defer></script>";


    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Juice Max | New Juice</title>
    <style>
        html {
            width: 100vw;
            height: 100vh;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(0, 162, 255), rgb(250, 246, 4));
            width: 100vw;
            height: 100vh;
            align-items: center;
            padding: 0rem;
            margin: 0rem;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>



<?php
    $ok = '0';
    if(!empty($_GET['ok']))
    {
        $ok = $_GET['ok'];

        if($ok == '1')
        {
            ?>
                <div class="sucesso">Liquido lançado com Sucesso !!!</div>
                <script>
                    setTimeout(function() {
                    $('.sucesso').fadeOut('fast');
                    }, 3000);
                </script>
            <?php

            $ok = '0';
        }

        if($ok == '2')
        {
            ?>
                <div class="erro">Ops. Algo deu errado, tente deletar o Liquido antes de lançar um novo !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }

        if($ok == '3')
        {
            ?>
                <div class="sucesso">Fruta lançada com Sucesso !!!</div>
                <script>
                    setTimeout(function() {
                    $('.sucesso').fadeOut('fast');
                    }, 3000);
                </script>
            <?php

            $ok = '0';
        }
        if($ok == '4')
        {
            ?>
                <div class="erro">Ops. Algo deu errado, tente deletar a Fruta antes de lançar um novo !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
        if($ok == '5')
        {
            ?>
                <div class="sucesso">Peso lançado com Sucesso !!!</div>
                <script>
                    setTimeout(function() {
                    $('.sucesso').fadeOut('fast');
                    }, 3000);
                </script>
            <?php

            $ok = '0';
        }
        if($ok == '6')
        {
            ?>
                <div class="erro">Ops. Algo deu errado, tente deletar o Peso antes de lançar um novo !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
        if($ok == '7')
        {
            ?>
                <div class="sucesso">Ingrediente Adicionado com Sucesso !!!</div>
                <script>
                    setTimeout(function() {
                    $('.sucesso').fadeOut('fast');
                    }, 3000);
                </script>
            <?php

            $ok = '0';
        }
        if($ok == '8')
        {
            ?>
                <div class="erro">Ops. Algo deu errado, tente deletar o Algum Ingrediente antes de lançar um novo !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
        if($ok == '9')
        {
            ?>
                <div class="erro">Peso MAXIMO 500ml foi Exedido, Tente deletar algum para adicionar outro !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }

        if($ok == '10')
        {
            ?>
                <div class="erro">Já existe Muitos Ingredientes MAXIMO 5 unidades, Tente deletar algum para adicionar outro !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }

        if($ok == '11')
        {
            ?>
                <div class="erro">Já existe Muitos Ingredientes MAXIMO 5 unidades, Tente deletar algum para adicionar outro !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
        if($ok == '12')
        {
            ?>
                <div class="erro">O Peso Não Foi Lançado !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
        if($ok == '13')
        {
            ?>
                <div class="erro">A Fruta Não Foi Lançada !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
        if($ok == '14')
        {
            ?>
                <div class="erro">A Fruta Não Foi Lançada !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
        if($ok == '15')
        {
            ?>
                <div class="sucesso">Suco Adicionado com Sucesso !!!</div>
                <script>
                    setTimeout(function() {
                    $('.sucesso').fadeOut('fast');
                    }, 3000);
                </script>
            <?php

            $ok = '0';
        }
        if($ok == '16')
        {
            ?>
                <div class="erro">Não há ingredientes na lista !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
        if($ok == '17')
        {
            ?>
                <div class="erro">Não há Liquido na lista !!!</div>
                <script>
                    setTimeout(function() {
                    $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
        }
    }
?>




<div class="container_w">
    <div class="aba">

    <a href="admin.php"  class="bt bt_right">Voltar</a>
    </div>
    <div class="w_48vw">
        <div class="container_h">
            <div class="h_2vh"></div>
                <div class="h_80vh">
                   
                    <?php include 'Templates/100_Create_View_Liquido.php' ?>

                    <?php include 'Templates/100_Create_View_Ingredientes.php' ?>
                </div>
            <div class="h_2vh"></div>
        </div>
    </div>
    <div class="w_24vw">
        <div class="container_h">
            <div class="h_2vh"></div>
                <div class="h_80vh">
                    <?php include 'Templates/14_Pre_Ingrediente_Fruta.php' ?>
                    <?php include 'Templates/100_Create_View_Peso.php' ?>
                    <a href='Tools/Tools_Create_Suco.php' title='Adicionar' id='bt_fazer_pedido'>Criar Suco</a>
                </div>
            <div class="h_2vh"></div>
        </div>
    </div>
</div>

