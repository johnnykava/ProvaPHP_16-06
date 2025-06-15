<?php 
    require_once '../lock.php';

    if(!isset($_GET['id_livro'])){
        header('location:dashboard.php?codigo=10');
        exit();
    }

    $id_livro = (int)$_GET['id_livro'];
    $id_usuario = $_SESSION['id'];

    require_once '../includes/conexao.php';

    $conn = conectar_banco();

    $sql = "DELETE FROM tb_livro WHERE id_livro = $id_livro AND id_usuario = $id_usuario";

    mysqli_query($conn, $sql);

    $linhas = mysqli_affected_rows($conn);

    if($linhas < 0){
        header('location:dashboard.php?codigo=10');
        exit();
    }

    header('location:dashboard.php');
?>