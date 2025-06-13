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

    function form_em_branco_item(){
        return empty($_POST['nome']) ||
               empty($_POST['autor']);
    }

    function validar_codigo(){
        if(!isset($_GET['codigo'])){
            return;
        }

        $codigo = (int)$_GET['codigo'];

        switch($codigo){
            case 1:
                $msg = "<h3>Você não tem acesso a página solicitada!</h3>
                        <h3>Realize o seu login ou cadastre-se</h3>";
                break;

            case 2:
                $msg = "<h3>Você tem que preencher todos os dados do formulario!</h3>";
                break;

            case 3:
                $msg = "<h3>Ocorreu um erro ao acessar banco de dados. Por favor, contate
                        o suporte, ou tente novamente mais tarde</h3>";
                break;

            case 4:
                $msg = "<h3>Ocorreu um erro ao cadastrar. Por favor, contate
                        o suporte, ou tente novamente mais tarde</h3>";
                break;

            case 5:
                $msg = "<h3>Usuario ou E-mail, já existentes!</h3>";
                break;
            
            case 6:
                $msg = "<h3>Usuario ou E-mail, não encontrados!</h3>";
                break;

            case 7:
                $msg = "<h3>Usuario ou Senha incorretos!</h3>";
                break; 
                 
            case 8:
                $msg = "<h3>Erro ao buscar suas tarefas. 
                        Acione o suporte ou tente novamente mais tarde</h3>";
                break;    
                
            case 9:
                $msg = "<h3>Cadastrado com Sucesso!</h3>";
                break; 
            
            default:
                $msg = "";
                break;
        }

        echo $msg;
    }
?>