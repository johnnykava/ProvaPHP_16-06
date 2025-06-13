<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Devteca | Login</title>
</head>
<body class="home">
    <div class="container">
        <section>
            <h1>Login</h1>
            <?php 
                require_once 'function.php';

                validar_codigo();

                if(!empty($_SESSION)){
                    header('location:livro/dashboard.php');
                    exit();
                }
            ?>
            <form action="validar.php" method="post">
                <input type="text" id="usuario" name="usuario" placeholder="Usuario:" required>
                <input type="password" id="senha" name="senha" placeholder="Senha:" required>
                <button type="submit">Entrar</button>
                <a href="cadastro.php" class="botao-link">Cadastrar</a>
            </form>
        </section>
    </div>
</body>
</html>