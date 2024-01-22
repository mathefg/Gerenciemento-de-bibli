<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert PDO</title>
    <link rel="stylesheet" href="/PROJETO%20LIVRARIA%20FINNET/public/config/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/PROJETO%20LIVRARIA%20FINNET/bootstrap5/js/bootstrap.bundle.js"></script>
</head>
<?php 
if(isset($_GET["id"]) && !empty($_GET["id"])){

    $hostname = "localhost";
    $usuario = "root";
    $senha = "root";
    $bancodedados = "livraria";
    
    $conexao = mysqli_connect($hostname,$usuario,$senha) or die("Não foi possivel conectar");
    
    mysqli_select_db( $conexao, $bancodedados );
    
    $query = "Delete from livro where id=".$_GET["id"];
    $resultado = mysqli_query($conexao, $query);
    if($resultado)
{
    header("Location ./cadastrarlivro.php?mensagem=Excluido com sucesso");
    exit();
}else{
    header("Location ./cadastrarlivro.php?mensagem=Ocorreu algum erro");
    exit();
}
}else{
    header("Location: ./cadastrarlivro.php?mensagem=Selecione um usuario para apagar");
    exit();
}
?>