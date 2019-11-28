<?php 
	session_start();
	if ($_SESSION['user'] == 'user') { ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Área do Usuário</title>
		</head>
		<body>
			<h1>Seja bem vindo usuário</h1><br>
			O que deseja fazer?<br>
			<a href="visualizar.php">Visualizar Alunos</a><br>
			<a href="visualizar.php?tipo=2002">Visualizar alunos nascidos após 01/01/2002</a><br>
			<a href="sair.php">Sair</a><br>
		</body>
		</html>
	<?php } else {
		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
	}
?>