<?php 
	session_start();
	if ($_SESSION['user'] == 'admin') {
		include("criarTabela.php");
		include("conectar.inc.php");
		$conexao = conectar("localhost", "root", "", "ifsc");
		$comando = "SELECT * from aluno";
		$consulta = mysqli_query($conexao, $comando);
		if (isset($_GET['tipo'])) {
			criarTabela($consulta, $_GET['tipo']);
		} else {
			criarTabela($consulta);
		} 
		?> <br><br><input type="button" name="btn_voltar" value="Voltar para a tela de opções" onclick="location.href = 'administrador.php'"> <?php 
	} elseif ($_SESSION['user'] == 'user') {
		include("criarTabela.php");
		include("conectar.inc.php");
		$conexao = conectar("localhost", "root", "", "ifsc");
		$comando = "SELECT * from aluno";
		$consulta = mysqli_query($conexao, $comando);
		if (isset($_GET['tipo'])) {
			if ($_GET['tipo'] == 'editar' or $_GET['tipo'] == 'excluir') {
				unset($_GET['tipo']);
				criarTabela($consulta);
			} elseif ($_GET['tipo'] == '2002') {
				// $comandoPesquisa = $comando . " where datanascimento > '2002-01-01'";
				$consulta = mysqli_query($conexao, $comando . " where datanascimento > '2002-01-01'");
				criarTabela($consulta);
			}
		} else {
			criarTabela($consulta);
		} 
		?> <br><br><input type="button" name="btn_voltar" value="Voltar para a tela de opções" onclick="location.href = 'usuario.php'"> <?php
	} else {
		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
	}
?>