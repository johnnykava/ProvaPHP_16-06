<?php
    require_once '../includes/conexao.php';
    require_once '../lock.php';

    function listar_itens(){

        $conn = conectar_banco();

        $id = $_SESSION['id'];

        $sql = "SELECT id_livro,nome,autor FROM tb_livro
        WHERE id_usuario = $id";

        $resultado = mysqli_query($conn,$sql);

        $linhas = mysqli_affected_rows($conn);

        if($linhas < 0){
            header('location:/livro/dashboard.php?codigo=8');
            exit();
        }

        if ($linhas == 0) {
            echo "<h3>Você não possui livros cadastrados</h3>";
            return;
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
    }
?>