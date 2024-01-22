<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA CENTRAL</title>
    <link rel="stylesheet" href="/PROJETO%20LIVRARIA%20FINNET/public/config/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/PROJETO%20LIVRARIA%20FINNET/bootstrap5/js/bootstrap.bundle.js"></script>
</head>
<body>
<div>
    <header class="pagina1">
        <img class="logo" src="/PROJETO%20LIVRARIA%20FINNET/imagens/FINLIBRARY (1).png" width="350">
        <nav>
            <ul>
                <li class="licentral">
                <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >
                CLIENTE
                </font></font></button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/PROJETO%20LIVRARIA%20FINNET/actions/cliente/cadastrarcliente.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo Cliente</font></font></a></li>
                    <li><a class="dropdown-item" href="/PROJETO%20LIVRARIA%20FINNET/actions/cliente/cadastrarcliente.php?mensagem=Selecione%20um%20usuário%20para%20editar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar Cliente</font></font></a></li>
                
                </ul>
                </div>
                </li>

                <li class="licentral"><div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >
                LIVROS
                </font></font></button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/PROJETO%20LIVRARIA%20FINNET/actions/livros/cadastrarlivro.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo Livro</font></font></a></li>
                    <li><a class="dropdown-item" href="/PROJETO%20LIVRARIA%20FINNET/actions/livros/cadastrarlivro.php?mensagem=Selecione%20um%20livro%20para%20apagar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apagar</font></font></a></li>
                    
                </ul>
                </div>
                </li>
                <li class="licentral"><div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >
                LOCAÇÃO
                </font></font></button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/PROJETO%20LIVRARIA%20FINNET/actions/locacao/locacaolivro.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Locação</font></font></a></li>
                    <li><a class="dropdown-item" href="/PROJETO%20LIVRARIA%20FINNET/actions/locacao/locacaolivro.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Devolução</font></font></a></li>
                    
                </ul>
                </div></li>
            </ul>
        </nav>
    </header>
    <div class="divimgc">
        <img class="imgcen" src="/PROJETO%20LIVRARIA%20FINNET/imagens/FINLIBRARY-removebg-preview.png" alt="">
    </div>

</body>
</html>