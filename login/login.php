<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Static_1/css/Tela.css"/>
    <title>Tela de login</title>

</head>
<body>

    <div class="aba">
        <a href="../index.php"  class="bt_voltar" id="bt_voltar">Voltar</a>
        <a id="logo">Juice Max</a>
    </div>

    <div class="box_entrar"> 

        <h1 class="texto">Login</h1>

        <form action="testLogin.php" method="POST">

            <input type="text" name="nome" placeholder="Nome">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input id="bt_login" type="submit" name="submit" value="Entrar">

        </form>
    </div>

    <div>



    </div>

</body>

<script>
    document.addEventListener('keydown', function(e) {
        if(e.keyCode == 17){  //  Tecla Ctrl
        document.getElementById("id_voltar").click();
        }
    });
</script>

</html>