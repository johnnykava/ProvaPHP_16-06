<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Devteca | Cadastro</title>
</head>
<body class="home">
    <div class="container">
        <header>
            <h1>Cadastro de Usuário</h1>
        </header>
        <main>
            <div id="subtitulo">
            <h2>Seja bem vindo ao Devteca</h2>

            <?php

                require_once 'function.php';

                validar_codigo();

                if(!empty($_SESSION)){
                    header('location:livro/dashboard.php');
                    exit();
                }
            ?>

            </div>
            <form action="cadastrar.php" method="post">
                <div id="informativo">
                    <p>Preencha os campos abaixo:</p>
                </div>
                <div class="inputs">
                    <input type="text" id="usuario_cadastro" name="usuario_cadastro" placeholder="Nome" required>
                    <input type="password" id="senha_cadastro" name="senha_cadastro" placeholder="Senha" required>
                    <input type="email" id="email_cadastro" name="email_cadastro" placeholder="Email" required>
                    <button type="submit">Enviar</button>
                    <a class="botao-link" href="index.php">Voltar a Login</a>
                </div> 
            </form>  
        </main>
    </div>
</body>
</html>