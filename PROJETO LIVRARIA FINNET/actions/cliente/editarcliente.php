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
if(isset($_POST) && !empty($_POST))
{
$hostname = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = "livraria";

$conexao = mysqli_connect($hostname,$usuario,$senha) or die("Não foi possivel conectar");

mysqli_select_db( $conexao, $bancodedados );

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $ativo = $_POST["ativo"] == "on" ? true:false;

    $query ="update clientes set nome ='$nome',telefone ='$telefone',email ='$email',ativo = $ativo where id = ".$id;
    $resultado = mysqli_query($conexao, $query);
    header("Location: ./cadastrarcliente.php?mensagem=Usuário editado com sucesso");
    exit();
}
else if(isset($_GET["id"]) && !empty($_GET["id"]))
{
$hostname = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = "livraria";

$conexao = mysqli_connect($hostname,$usuario,$senha) or die("Não foi possivel conectar");

mysqli_select_db( $conexao, $bancodedados );

$query="select * from clientes where id = ".$_GET["id"];

$resultado = mysqli_query($conexao, $query);

$dados = mysqli_fetch_array($resultado);

$id = $dados["id"];
$nome = $dados["nome"];
$telefone = $dados["telefone"];
$email = $dados["email"];
$ativo = $dados["ativo"];

}else{
    header("Location: ./cadastrarcliente.php?mensagem=Selecione um usuário para editar");
    exit();
}
?>
<div class="card">
    <div class="card-header">
        <h3 class="">Editar Usuario</h3>
    </div>
    <div class="divsup">
        <div class="cadr-boy">
            <div class="row">
                <div class="col-md-4 offset-4">
                    <form action="./editarcliente.php" method="post">
                        <div class="fomr-group">
                            <label for="">Id</label>
                                <input type="text" value="<?php echo $id?>" name="id" readonly class="form-control">
                        </div>
                        <div class="fomr-group">
                            <label for="">Nome</label>
                                <input type="text" name="nome" class="form-control">
                        </div>

                        <div class="fomr-group">
                            <label for="">Telefone</label>
                                <input type="text" value="<?php echo $telefone?>"  name="telefone" class="form-control">
                        </div>
                        <div class="fomr-group">
                            <label for="">Email</label>
                                <input type="email" value="<?php echo $email?>"  name="email" class="form-control">
                        </div>
                        <div class="fomr-group">
                            <label for="">Ativo</label>
                                <?php if($ativo == 1)
                                {?>
                                <input type="checkbox" name="ativo" checked class="form_check">
                                <?php 
                                }else{
                                ?>
                                <input type="checkbox" name="ativo" class="form_check">
                                <?php 
                                }
                                ?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">
                            Atualizar Usuario
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
