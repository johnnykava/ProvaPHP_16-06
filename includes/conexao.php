<?php
    function conectar_banco(){

        $servidor = 'localhost:3307';
        $usuario = 'root';
        $senha = '';
        $banco = 'bd_devteca';

        $conn = mysqli_connect($servidor,$usuario,$senha,$banco);

        if(!$conn){
            exit ("Erro de conexão: " . mysqli_connect_error());
        }

        return $conn;
    }
?>