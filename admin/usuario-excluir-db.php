<?php

    $id           = $_POST["usuarioID"];    
    $nome         = $_POST["nome"];
    $nomeUsuario  = $_POST["nomeUsuario"];
    $senha        = $_POST["senha"];

    require("inc/conexao.php");

    $query = "update usuario set isAtivo = false where id = $id";

    $result = mysqli_query($conexao, $query);

    header("location:usuario-listar.php");
?>