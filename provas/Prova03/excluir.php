<?php 
	session_start();
	if ($_SESSION['user'] == 'admin') {
		include("conectar.inc.php");
		$conexao = conectar("localhost", "root", "", "ifsc");
		$identificador = $_GET['id'];
		$comando = "DELETE FROM aluno where idaluno = '$identificador'";
		$excluir = mysqli_query($conexao, $comando);
		if ($excluir == true) {
			$_SESSION['resultado'] = "Aluno excluido com sucesso!";
			desconectar($conexao);
			header("location: administrador.php");
		} else {
			echo "Não foi possível excluir o aluno.";
		}
	} else {
		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
	}
?> 