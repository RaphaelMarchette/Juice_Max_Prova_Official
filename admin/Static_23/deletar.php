<?php
    include("../../config_upload.php");

    if(isset($_GET['deletar'])) {

    $id = intval($_GET['deletar']);
    $sql_query = $conexao_upload->query("SELECT * FROM arquivos WHERE id = '$id' ") or die($conexao->error);
    $arquivo =  $sql_query->fetch_assoc();

    if(unlink($arquivo['path'])) {
    $deu_certo = $conexao_upload->query("DELETE FROM arquivos WHERE id = '$id' ") or die($conexao->error);
    if($deu_certo)
        echo "<p>Arquivo excluído com sucesso!!</p>";
    }
    header('Location: upload_img.php?ok=1');
    }

?>