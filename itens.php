<?php require_once 'lock.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devteca|Listagem Itens</title>
</head>
<body>
    <h1>Itens cadastrados</h1>

    <div class="links_dashboard">
        <nav>
            <a href="dashboard.php">HOME</a>
            <a href="itens.php">LISTAR ITENS</a>
            <a href="novo_item.php">CADASTRAR ITENS</a>
            <a href="editar_item.php">EDITAR ITEM</a>
            <a href="logout.php">ENCERRAR SESSÃO</a>
        </nav>

    <?php

        require_once 'includes/conexao.php';

        $conn = conectar_banco();

        $id = $_SESSION['id'];

        $sql = "SELECT id_livro,nome,autor FROM tb_livro
        WHERE id_usuario = $id";

        $resultado = mysqli_query($conn,$sql);

        $linhas = mysqli_affected_rows($conn);

        if($linhas < 0){
        header('location:itens.php?codigo=8');
        exit();
        }

        if ($linhas == 0) {
            exit("<h3>Você não possui tarefas cadastradas</h3>");
        }

        echo '<div class="tabela_itens">';
        echo '<table>';
        echo '<thead>';
        echo '<tr>
              <th>ID</th>
              <th>LIVRO</th>
              <th>AUTOR</th>';
        echo '<tr>';      
        echo '</thead>';
        echo '<tbody>';

        while ($livro_atual = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<td>' . $livro_atual['id_livro'] . '</td>';
            echo '<td>' . $livro_atual['nome'] . '</td>';
            echo '<td>' . $livro_atual['autor'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    ?>
    
</body>
</html>