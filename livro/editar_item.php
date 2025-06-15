<?php 
    require_once '../lock.php';

    if(!isset($_GET['id_livro'])){
        header('location:editar_item.php?codigo=4');
        exit();
    }

    $id_livro = (int)$_GET['id_livro'];
    $id_usuario = $_SESSION['id'];

    require_once '../includes/conexao.php';

    $conn = conectar_banco();

    $sql = "SELECT nome, autor FROM tb_livro WHERE id_livro = $id_livro AND id_usuario = $id_usuario";

    $resultado = mysqli_query($conn, $sql);

    $linhas = mysqli_affected_rows($conn);

    if($linhas < 0){
        header('location:editar_item.php?codigo=10');
        exit();
    }

    $livro_atual = mysqli_fetch_assoc($resultado);
?>
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
            </ul>
        </nav>
        <div class="container-conteudo">
            <div class="container-main">
                <section class="section-livros">
                    <h1>Editar Livro</h1>
                    <form action="atualizar_edicao.php" method="post">
                        <input type="hidden" id="id_livro" name="id_livro" value="<?= htmlspecialchars($id_livro) ?>">
                        <input type="text" id="nome" name="nome" placeholder="Titulo:" value="<?= htmlspecialchars($livro_atual['nome']) ?>" required><br>
                        <input type="text" id="autor" name="autor"placeholder="Autor:" value="<?= htmlspecialchars($livro_atual['autor']) ?>" required><br>
                        <button type="submit">Atualizar</button>
                    </form>
                    <?php 
                        require_once '../function.php';

                        validar_codigo();
                    ?>
                </section>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>