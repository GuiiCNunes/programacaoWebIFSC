<?php 
	session_start();
	if ($_SESSION['user'] == 'admin') {
		include("conectar.inc.php");
		$conexao = conectar("localhost", "root", "", "ifsc");
		$identificador = $_GET['id'];
		$comando = "SELECT matricula, nome, datanascimento, endereco from aluno where idaluno = '$identificador'";
		$consulta = mysqli_query($conexao, $comando);
		while ($resultado = mysqli_fetch_array($consulta)) {
			$matricula = $resultado['matricula'];
			$nome = $resultado['nome'];
			$datanascimento = $resultado['datanascimento'];
			$endereco = $resultado['endereco'];
		} 
		?>
		<form method="POST" action="editar.inc.php">
			Matrícula: <input type="text" name="matricula" required="" value="<?= $matricula ?>"><br>
			Nome: <input type="text" name="nome" required="" value="<?= $nome ?>"><br>
			Data de Nascimento: <input type="date" name="datanasc" required="" value="<?= $datanascimento ?>"><br>
			Endereço: <input type="text" name="endereco" required="" value="<?= $endereco ?>"><br>
			<input type="hidden" name="identificador" value="<?= $identificador ?>">
			<input type="submit" name="btn_editar" value="Editar"><br>
			<input type="button" name="btn_voltar" value="Voltar para a tela de opções" onclick="location.href = 'administrador.php'">
		</form>
	<?php 
		desconectar($conexao);
	} else {
		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
	}
?>