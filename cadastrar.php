<?php
    require_once 'function.php';

    if(form_nao_enviado()){
        header('location:index.php?codigo=1');
        exit();
    };

    if(form_em_branco_cadastro()){
        header('location:cadastro.php?codigo=2');
        exit();
    }

    require_once 'includes/conexao.php';

    $usuario = $_POST['usuario_cadastro'];
    $senha = $_POST['senha_cadastro'];
    $email = $_POST['email_cadastro'];

    $conn = conectar_banco();

    $sql = "SELECT usuario, email FROM tb_usuario";

    $resultado = mysqli_query($conn, $sql);

    $linhas = mysqli_affected_rows($conn);

    if($linhas < 0){
        header('location:cadastro.php?codigo=4');
        exit();
    }

    while($usuario_tabela = mysqli_fetch_assoc($resultado)){
        $usuario_atual = $usuario_tabela['usuario'];
        $email_atual = $usuario_tabela['email'];

        if($usuario_atual == $usuario || $email_atual == $email){
            header('location:cadastro.php?codigo=5');
            exit();
        }
    }

    $sql = "INSERT INTO tb_usuario (usuario,senha,email)
    VALUES (?,?,?)";

    $stmt = mysqli_prepare($conn,$sql);

    if(!$stmt){
        header('location:cadastro.php?codigo=3');
        exit;
    }

    if(!mysqli_stmt_bind_param($stmt,"sss",$usuario,$senha, $email)){
        header('location:cadastro.php?codigo=3');
        exit;
    }

    if(!mysqli_stmt_execute($stmt)){
        header('location:cadastro.php?codigo=3');
        exit;
    }

    session_start();

    $_SESSION['id'] = $id;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['email'] = $email;

    header('location:dashboard.php');
?>
