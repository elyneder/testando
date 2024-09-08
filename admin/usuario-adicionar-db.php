<?php

    $nome         = $_POST["nome"];
    $nomeUsuario  = $_POST["nomeUsuario"];
    $senha        = $_POST["senha"];

    require("inc/conexao.php");

    $query = "INSERT INTO usuario (nome, tipo_usuario_id, nome_usuario, 
        senha, isAtivo) VALUES ('$nome', 3, '$nomeUsuario','$senha',true);";  

    $result = mysqli_query($conexao, $query);

    header("location:usuario-listar.php");
?>