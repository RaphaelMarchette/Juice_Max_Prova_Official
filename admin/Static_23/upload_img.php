<?php
    $ok = '0';

    if(!empty($_GET['ok']))
    {
        $ok = $_GET['ok'];

        if($ok == '1')
        {
            ?>
                <div class="erro">Excluída com Sucesso!</div>
                <script>

                    setTimeout(function() {
                        $('.erro').fadeOut('fast');
                    }, 3000);
                </script>
            <?php
            $ok = '0';
        }
        else
        {
            ?>
                <div class="erro">Cancelada !!!</div>
            <?php
        }
    }

?>



<?php



    include("../../config_upload.php");


    function enviarArquivo($error,$size, $name, $tmp_name){
        include("../../config_upload.php");

        if($error)
            die("Falha ao enviar arquivo");

        if($size > 2097152)
            die("Arquivo muito grande!! Max: 2MB");

        $pasta = "arquivos/";
        $nomeDoArquivo = $name;
        $novoNomeDoArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

        if($extensao != "jpg" && $extensao != 'png')
            die("Tipo de arquivo não aceito");

        $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

        $deu_certo = move_uploaded_file($tmp_name, $path);
        if($deu_certo){
            $conexao_upload->query("INSERT INTO arquivos (nome, path, data_upload) VALUES('$nomeDoArquivo','$path',NOW())") or die($conexao_upload->error);
            header('Location: upload_img.php');
            return true;
        } else
            return false;
    }



    if(isset($_FILES['arquivos'])) {
        // echo " arquivo enviado";
        // var_dump($_FILES['arquivo']);
        $arquivos = $_FILES['arquivos'];
        $tudo_certo = true;
        foreach($arquivos['name'] as $index => $arq){
            $deu_certo = enviarArquivo($arquivos['error'][$index],$arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index]);
            if(!$deu_certo)
                $tudo_certo = false;
        }
        if($tudo_certo)
            echo "<p>Todos os arquivos foram enviados com sucesso!";
        else
            echo "<p>Falha ao enviar um ou mais arquivos!";
    }

    $sql_query = $conexao_upload->query("SELECT * FROM arquivos") or die($conexao->error);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        .sucesso, .erro{
    background-color: rgba(0, 0, 0, 0.4);
    border: 0.2rem solid dodgerblue;
    border-radius: 1rem 0rem 1rem 0rem;
    display: block;
    width: 30rem;
    height: 4.2rem;
    line-height: 3.5rem;
    text-align: center;
    font-size: 1.6rem;
    font-weight: 500;
    color: whitesmoke;
    text-decoration: none;
    position: absolute;
    top:0.5rem;
    left:50%;
    transform: translate(-50%,0);
    opacity:0.8;
    z-index: 10;
}

.sucesso{
    background-color: darkgreen;
    background-image: linear-gradient(to right, rgb(5, 162, 52),rgb(5, 180, 52),rgb(5, 162, 52));
}

.erro{
    background-color: darkred;
}
    </style>

</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="">
        <p><label for="">Selecione o arquivo</label>
        <input multiple name="arquivos[]" type="file"></p>
        <button name="upload" type="submit">Enviar arquivo</button>
    </form>

    <h1>Lista de Arquivos</h1>

    <table border="1" cellpadding="10">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
            <th>Deletar</th>
        </thead>
        <tbody>
        <?php
            while($arquivo = $sql_query->fetch_assoc()) {
                $id = $arquivo['id'];
                $nome = $arquivo['nome'];
                $data = date('d/m/Y H:i', strtotime($arquivo['data_upload']));
                $path = $arquivo['path'];
                echo "<tr>";
                echo "<td><img height='50' src='$path' </td>";
                echo "<td> <a target='_blank' href='$path'>$nome</a> </td>";
                echo "<td>$data</td>";
                echo "<td><a href='deletar.php?deletar=$id'>Deletar</a></a></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>