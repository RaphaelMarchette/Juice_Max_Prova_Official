<?php include 'Admin_Logado.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php
        include_once('../config.php');

        echo "<link rel='stylesheet' href='$pasta_static/css/Tela.css' />";
        echo "<link rel='stylesheet' href='$pasta_static/css/Table.css'/>";
        echo "<link rel='stylesheet' href='$pasta_static/css/Container.css'/>";
        echo "<link rel='stylesheet' href='$pasta_static/css/1.css' />";
        echo "<link rel='stylesheet' href='$pasta_static/css/Card.css'/>";
        echo "<link rel='stylesheet' href='$pasta_static/css/versao_4.css' />";
        
        echo "<script src='$pasta_static/Scripts/aba_nav.js' defer></script>";
    ?>

</body>
</html>

<script>
    document.addEventListener('keydown', function(e) {
    if(e.keyCode == 17){  //  Tecla Ctrl
    document.getElementById("bt_voltar").click();
    }
    });
</script>
