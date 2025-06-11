<?php 
    function form_nao_enviado(){
        return $_SERVER['REQUEST_METHOD'] !== 'POST';
    }

    function form_em_branco(){
        return empty($_POST['usuario'] ||
                     $_POST['senha']);
    }

    function validar_codigo(){
        if(!isset($_GET['codigo'])){
            return;
        }

        $codigo = (int)$_GET['codigo'];

        switch($codigo){
            case 1:
                $msg = "<h3>Você não tem acesso a página solicitada!</h3>";
                break;

            case 2:
                $msg = "<h3>Você tem que preencher todos os dados do formulario!</h3>";
                break;
            
            default:
                $msg = "";
                break;
        }

        echo $msg;
    }
?>