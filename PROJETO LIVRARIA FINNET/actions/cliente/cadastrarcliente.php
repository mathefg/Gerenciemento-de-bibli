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
<body>
<?php

$hostname = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = "livraria";

$conexao = mysqli_connect($hostname,$usuario,$senha) or die("Não foi possivel conectar");

mysqli_select_db( $conexao, $bancodedados );

    if(isset($_GET["mensagem"]) && !empty($_GET["mensagem"]))
    {
        ?>
            <div class="alert alert-warning">
                <?php echo $_GET["mensagem"]?>
            </div>
    <?php 
}
if(isset($_POST) && !empty($_POST))
{
    if(empty($_POST["telefone"]))
    {
        ?>
            <div class="alert alert-danger">
                O campo não pode estar vazio
            </div>
        <?php 
    }
    else if(empty($_POST["email"]))
    {
        ?>
            <div class="alert alert-danger">
                O campo Email não pode estar vazio
            </div>
        <?php 
    }
    else
    {
    $hostname = "localhost";
    $usuario = "root";
    $senha = "root";
    $bancodedados = "livraria";

    $conexao = mysqli_connect($hostname,$usuario,$senha) or die("Não foi possivel conectar");

    mysqli_select_db( $conexao, $bancodedados );
    
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $ativo = $_POST["ativo"] == "on" ? true : false;

        $query ="insert into clientes (nome,telefone,email,ativo) values('$nome','$telefone','$email','$ativo')";
        $resultado = mysqli_query($conexao, $query);
        if($resultado == 1)
        {
            ?>
                <div class="alert alert-sucess">
                    Usuario inserido com sucesso.
                </div>
           <?php 
        }
    }

}
?>
<div class="card">
    <div class="card-header">
            <h3 class="">Cadastro de Usuário</h3>
    </div>
    <div class="divsup">
        <div class="cadr-boy">
            <div class="row">
                <div class="col-md-4 offset-4">
                    <form action="./editarcliente.php" method="post">
                        <div class="fomr-group">
                            <label for="">Nome</label>
                                <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="fomr-group">
                            <label for="">Telefone</label>
                                <input type="text" name="telefone" class="form-control">
                        </div>
                        <div class="fomr-group">
                            <label for="">Email</label>
                                <input type="email"  name="email" class="form-control">
                        </div>
                        <div class="fomr-group">
                            <label for="">Ativo</label>
                                <input type="checkbox" name="ativo" class="form_check">
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
<table class="table">
    <thead>
        <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ativo</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query ="Select id,nome,telefone,email,ativo from clientes";
        $dados = mysqli_query($conexao, $query);
        if($dados)
        {
            while($linha = mysqli_fetch_assoc($dados))
            {
                ?>
                    <tr>
                        <td><?php echo $linha["id"];?></td>
                        <td><?php echo $linha["nome"];?></td>
                        <td><?php echo $linha["telefone"];?></td>
                        <td><?php echo $linha["email"];?></td>
                        <td><?php 
                        if($linha["ativo"]==1)
                        {
                            ?>
                                <input type="checkbox" disabled checked />
                            <?php 
                        }else{
                            ?>
                                <input type="checkbox" disabled />
                            <?php 
                        }
                        ?>
                        </td>
                        <td>
                        <a class="btn btn-warning" href="./editarcliente.php?id=<?php echo $linha["id"]; ?>">
                        Editar
                            </a>
                            <a class="btn btn-danger" href="./excluircliente.php?id=<?php echo $linha["id"]; ?>">
                        Excluir
                            </a>
                            
                        </td>
                    </tr>
                <?php 
            }
        }
        ?>
    </tbody>
</table>
</body>
</html>