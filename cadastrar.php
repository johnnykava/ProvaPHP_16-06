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

    $sql = "INSERT INTO tb_usuario (usuario,senha,email)
    VALUES (?,?,?)";

    $stmt = mysqli_prepare($conn,$sql);

    if(!$stmt){
        header('location:cadastro.php?codigo=3');
        exit;
    }

    if(!mysqli_stmt_bind_param($stmt,"sss",$usuario,$senha,$email)){
        header('location:cadastro.php?codigo=3');
        exit;
    }

    if(!mysqli_stmt_execute($stmt)){
        header('location:cadastro.php?codigo=3');
        exit;
    }

    header('location:dashboard.php');
?>
