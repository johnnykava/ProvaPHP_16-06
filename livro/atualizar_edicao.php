<?php 
    require_once '../lock.php';
    require_once '../function.php';

    if(form_nao_enviado()){
        header('location:dashboard.php?codigo=1');
        exit();
    }

    if(form_em_branco_item()){
        header('location:dashboard.php?codigo=2');
        exit();
    }

    require_once '../includes/conexao.php';

    $nome_editar = $_POST['nome'];
    $autor_editar = $_POST['autor'];
    $id_livro = $_POST['id_livro'];
    $id_usuario_session = $_SESSION['id'];

    $conn = conectar_banco();

    $sql = "UPDATE tb_livro SET nome = ?, autor = ? WHERE id_livro = ? AND id_usuario = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if(!$stmt){
        header('location:editar_item.php?codigo=4');
        exit();
    }

    if(!mysqli_stmt_bind_param($stmt, "ssii", $nome_editar, $autor_editar, $id_livro, $id_usuario_session)){
        header('location:editar_item.php?codigo=4');
        exit();
    }

    if(!mysqli_stmt_execute($stmt)){
        header('location:editar_item.php?codigo=4');
        exit();
    }

    header('location:dashboard.php?codigo=12');
?>