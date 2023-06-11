<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="Public/Static_1/css/Tela.css"/>
    <title>Juice Max</title>
    <style>
        html{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(28, 89, 117));
        }
    </style>
</head>

<body>

    <div class="aba">
        <a href="login/login.php" class="bt_logar" id="bt_logar">Login</a>

        <a id="logo">Juice Max</a>

    </div>

    <div class="box_entrar"> 
        <a id="bt_entrar" href="Public/Pagar.php">Entrar</a>
    </div>

</body>

<script>
    document.addEventListener('keydown', function(e) {
    if(e.keyCode == 32){  //  Tecla Space
    document.getElementById("bt_entrar").click();
    }
    });
</script>

</html>