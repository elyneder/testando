<?php

  	$nomeUsuario  = $_POST["email"];
    $senha        = $_POST["senha"];

    include("inc/conexao.php");

	$sql = "SELECT id, nome FROM usuario WHERE nome_usuario = '$nomeUsuario' and senha = '$senha'";

	
	$result = $conexao -> query($sql);

	if(mysqli_num_rows($result) < 1)
	{	
		die("Nome de usuário ou senha inválido(s)");	
	}        
	else {
//		die("Usuário encontrado");
		$row = mysqli_fetch_assoc($result);		
		session_start();
		$_SESSION['usuarioLogado'] = $row['id'];
		$_SESSION['usuarioNome'] = $row['nome'];
      	header("location:index.php");
	}
?>