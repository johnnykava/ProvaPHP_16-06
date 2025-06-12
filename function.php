<?php 
    function form_nao_enviado(){
        return $_SERVER['REQUEST_METHOD'] !== 'POST';
    }

    function form_em_branco_index(){
        return empty($_POST['usuario']) ||
               empty($_POST['senha']);
    }

    function form_em_branco_cadastro(){
        return empty($_POST['usuario_cadastro']) ||
               empty($_POST['senha_cadastro']) ||
               empty($_POST['email_cadastro']);
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

            case 3:
                $msg = "<h3>Ocorreu um erro ao acessar banco de dados. Por favor, contate
                        o suporte, ou tente novamente mais tarde</h3>";
                break;

            case 4:
                $msg = "<h3>Ocorreu um erro ao se cadastrar. Por favor, contate
                        o suporte, ou tente novamente mais tarde</h3>";
                break;

            case 5:
                $msg = "<h3>Usuario ou E-mail, já existentes!</h3>";
                break;
            
                case 6:
                $msg = "<h3>Usuario ou E-mail, não encontrados!</h3>";
                break;
            
            default:
                $msg = "";
                break;
        }

        echo $msg;
    }
?>