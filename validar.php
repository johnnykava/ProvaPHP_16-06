<?php 
    require_once 'function.php';

    if(form_nao_enviado()){
        header('location:index.php?codigo=1');
        exit();
    }

    if(form_em_branco_index()){
        header('location:index.php?codigo=2');
        exit();
    }
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    require_once 'includes/conexao.php';

    $conn = conectar_banco();

    $sql = "SELECT * FROM tb_usuario WHERE usuario = ? AND senha = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if(!$stmt){
        header('location:cadastro.php?codigo=3');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);

    if(!mysqli_stmt_execute($stmt)){
        header('location:index.php?codigo=3');
        exit();
    }

    mysqli_stmt_store_result($stmt);

    $linhas = mysqli_stmt_affected_rows($stmt);

    if($linhas < 0){
        header('location:index.php?codigo=3');
        exit();
    }

    if($linhas == 0){
        header('location:index.php?codigo=7');
        exit();
    }

    mysqli_stmt_bind_result($stmt, $id, $usuario, $senha, $email);

    mysqli_stmt_fetch($stmt);

    session_start();

    $_SESSION['id'] = $id;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header('location:livro/dashboard.php');
?>