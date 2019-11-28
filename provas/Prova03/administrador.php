<?php 
	session_start();
	if ($_SESSION['user'] == 'admin') { ?>
	
		<!DOCTYPE html>
		<html>
		<head>
			<title>Área do Administrador</title>
		</head>
		<body>
			<h1>Seja bem vindo a página de administrador</h1>
			<a href="cadastrar.php">Cadastrar Aluno</a><br>
			<a href="visualizar.php">Visualizar Aluno</a><br>
			<a href="visualizar.php?tipo=editar">Editar Aluno</a><br>
			<a href="visualizar.php?tipo=excluir">Excluir Aluno</a><br>
			<a href="sair.php">Sair</a><br>
			<?php if (isset($_SESSION['resultado'])) {
				echo $_SESSION['resultado'];
				unset($_SESSION['resultado']);
			} ?>
		</body>
		</html>
	<?php 
	} else {
		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
	}
?>