<?php require_once '../lock.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Devteca | Dashboard</title>
</head>
<body class="dashboard">
    <header class="header-dashboard">
        <div class="container-header">
            <h1 class="titulo-header">Devteca</h1>
            <nav>
                <h1 id="h1_dashboard">Bem vindo, <?= $_SESSION['usuario']?></h1>
                <a href="../logout.php" class="botao-sair-dashboard">Sair</a>
            </nav>
        </div>
    </header>
    <main class="main-dashboard">
        <nav class="menu-lateral">
            <ul>
                <li>
                    <a href="dashboard.php">Listar Livros</a>
                </li>
                <li>
                    <a href="novo_item.php">Cadastrar Livro</a>
                </li>
                <li>
                    <a href="editar_item.php">Editar Livro</a>
                </li>
            </ul>
        </nav>
        <div class="container-conteudo">
            <div class="container-main">
                <section class="section-livros">
                    <h1>Livros Cadastrados</h1>
                    <?php 
                        require_once 'listar_itens.php';

                        listar_itens();
                    ?>
                </section>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>