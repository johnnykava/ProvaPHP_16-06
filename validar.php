<?php 
    require_once 'function.php';

    if(form_nao_enviado()){
        header('location:index.php?codigo=1');
        exit();
    }

    if(form_em_branco()){
        header('location:index.php?codigo=2');
        exit();
    }
?>