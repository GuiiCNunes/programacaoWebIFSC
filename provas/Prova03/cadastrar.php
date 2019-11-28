<?php 
	session_start();
	if ($_SESSION['user'] == 'admin') { ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Cadastro de novos alunos</title>
		</head>
		<body>
			<form method="POST" action="#">
				Matrícula: <input type="text" name="matricula" required=""><br>
				Nome: <input type="text" name="nome" required=""><br>
				Data de Nascimento: <input type="date" name="datanasc" required=""><br>
				Endereço: <input type="text" name="endereco" required=""><br>
				<input type="submit" name="btn_cadastrar" value="Cadastrar"><br>
			</form>
		</body>
		</html>
	<?php 
		if (isset($_POST['matricula']) && isset($_POST['nome']) && isset($_POST['datanasc']) && isset($_POST['endereco'])) {
			include("conectar.inc.php");
			$conexao = conectar("localhost", "root", "", "ifsc");
			$novaMatricula = $_POST['matricula'];
			$novoNome = $_POST['nome'];
			$novaDataNasc = $_POST['datanasc'];
			$novoEndereco = $_POST['endereco'];
			$comando = "INSERT INTO aluno (matricula, nome, datanascimento, endereco) values ('$novaMatricula','$novoNome','$novaDataNasc','$novoEndereco')";
			if (mysqli_query($conexao, $comando) == true) {
				$_SESSION['resultado'] = "Aluno cadastrado com sucesso!";
				desconectar($conexao);
				header("location: administrador.php");
			} else {
				echo "Erro ao cadastrar aluno.";
			}

		}
	} else {
		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
	}
?>