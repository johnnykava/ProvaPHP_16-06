<?php 
    require_once 'function.php';

    if(form_nao_enviado()){
        header('location:index.php?codigo=1');
        exit();
    }

    if(isset($_POST['email_cadastro'])){
        if(form_em_branco_cadastro()){
            header('location:cadastro.php?codigo=2');
        exit();
        }
    }

    else if(isset($_POST['usuario'])){
        if(form_em_branco_index()){
            header('location:index.php?codigo=2');
        exit();
        }
    }
    
?>