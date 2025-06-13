<?php require_once 'lock.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Devteca | Dashboard</title>
</head>
<body class="dashboard">
    <header class="header-dashboard">
        <div class="container-header">
            <h1>Devteca</h1>
            <nav>
                <h1 id="h1_dashboard">Bem vindo <?= $_SESSION['usuario']?></h1>
                <a href="logout.php" class="botao-sair-dashboard">Sair</a>
            </nav>
        </div>
    </header>
    <main>
        <nav class="menu-lateral">
            <ul>
                <li>
                    <a href="dashboard.php">Home</a>
                </li>
                <li>
                    <a href="itens.php">Listar Itens</a>
                </li>
                <li>
                    <a href="novo_item.php">Cadastrar Itens</a>
                </li>
                <li>
                    <a href="editar_item.php">Editar Item</a>
                </li>
            </ul>
        </nav>
    </main>
    <footer>

    </footer>
</body>
</html>