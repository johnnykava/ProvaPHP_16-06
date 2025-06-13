<?php
    require_once '../lock.php';
    require_once '../function.php';

    if(form_nao_enviado()){
        header('location:/livro/novo_item.php?codigo=1');
        exit();
    }

    if(form_em_branco_item()){
        header('location:/livro/novo_item.php?codigo=2');
        exit();
    }

    require_once '../includes/conexao.php';

    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $id = $_SESSION['id'];

    $conn = conectar_banco();

    $sql = "INSERT INTO tb_livro (nome, autor, id_usuario) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    
    if(!$stmt){
        header('location:restrita.php?codigo=4');
        exit();
    }

    if(!mysqli_stmt_bind_param($stmt, "ssi", $nome, $autor, $id)){
        header('location:restrita.php?codigo=4');
        exit();
    }

    if(!mysqli_stmt_execute($stmt)){
        header('location:restrita.php?codigo=4');
        exit();
    }

    header('location:novo_item.php?codigo=9');
?>