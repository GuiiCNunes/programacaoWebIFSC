<!DOCTYPE html>
<html>
<head>
	<title>Exercício 6</title>
	<meta charset="utf-8">
	<!--Faça um programa em php que mostre na tela o nome, idade, endereço e e-mail do aluno.!-->
</head>
<body>
	<form method="GET" action="exer6.php">
		<h3> Mostrar Nome, Idade, Endereço e E-mail do aluno.</h3><br><br>
		Digite seu nome:	<input type="text" name="nome"><br>
		Digite sua idade:	<Input type="text" name="idade"><br>
		Digite seu endereço:<input type="text" name="endereco"><br>
		Digite seu e-mail:	<input type="text" name="email"><br>
		<input type="submit" name="Enviar">
	</form>
	<?php
		if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['endereco']) && isset($_GET['email'])) {
		 	$nome = $_GET['nome'];
			$idade = $_GET['idade'];
			$endereco = $_GET['endereco'];
			$email = $_GET['email'];
			echo "Nome: $nome <br> Idade: $idade <br> Endereço: $endereco <br> E-mail: $email";
		}
	?>		
</body>
</html>