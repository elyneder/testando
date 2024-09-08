<?php

    $id           = $_POST["usuarioID"];    
    $nome         = $_POST["nome"];
    $nomeUsuario  = $_POST["nomeUsuario"];
    $senha        = $_POST["senha"];

    require("inc/conexao.php");

    $query = "update usuario set nome = '$nome', nome_usuario = '$nomeUsuario', senha ='$senha' where id = $id";

    $result = mysqli_query($conexao, $query);

    header("location:usuario-listar.php");
?>