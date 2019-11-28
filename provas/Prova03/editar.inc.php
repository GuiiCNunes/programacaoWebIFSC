<?php 
	session_start();
	if ($_SESSION['user'] == 'admin') {
		include("conectar.inc.php");
		$conexao = conectar("localhost", "root", "", "ifsc");
		$novaMatricula = $_POST['matricula'];
		$novoNome = $_POST['nome'];
		$novaDataNasc = $_POST['datanasc'];
		$novoEndereco = $_POST['endereco'];
		$identificador = $_POST['identificador'];
		$comando = "UPDATE aluno set matricula = '$novaMatricula', nome = '$novoNome', datanascimento = '$novaDataNasc', endereco = '$novoEndereco' where idaluno = '$identificador'";
		if (mysqli_query($conexao, $comando) == true) {
			$_SESSION['resultado'] = "Aluno editado com sucesso!";
			desconectar($conexao);
			header("location: administrador.php");
		} else {
			echo "Erro ao cadastrar aluno.";
		}
	} else 	{
		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
	}
?>