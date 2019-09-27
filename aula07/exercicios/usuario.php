<!DOCTYPE html>
<html>
<head>
	<title>Dados Usuário</title>
	<meta charset="utf-8">
	<!-- Faça um programa em php que mostre na tela o nome, idade, endereço e e-mail do aluno. !-->
</head>
<body>
	<?php 
		$nome = $_GET['nome'];
		$idade = $_GET['idade'];
		$endereco =	$_GET['endereco'];
		$email = $_GET['email'];
		echo "Nome: $nome <br> Idade: $idade <br> Endereço: $endereco <br> E-mail: $email <br><br>"
	?>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>