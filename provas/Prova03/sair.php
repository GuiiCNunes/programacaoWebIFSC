<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		unset($_SESSION['user']);
		$_SESSION['deslogar'] = "Deslogado com sucesso!";
		header("location: index.php");
	} else {
		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
	}
?>