<?php require_once 'lock.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>c</title>
</head>
<body class="dashboard">
    <div class="container_dashboard">
        <div class="titulo_dashboard">
            <h1 id="h1_dashboard">Bem vindo <?= $_SESSION['usuario']?>, ao Devteca</h1>
            <p id="p_dashboard">Selecione o que deseja fazer</p>
        </div>
    <div class="links_dashboard">
        <nav>
            <a href="dashboard.php">HOME</a>
            <a href="itens.php">LISTAR ITENS</a>
            <a href="novo_item.php">CADASTRAR ITENS</a>
            <a href="editar_item.php">EDITAR ITEM</a>
            <a href="logout.php">ENCERRAR SESSÃO</a>
        </nav>
    </div>
    </div>
</body>
</html>