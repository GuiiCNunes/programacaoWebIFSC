<!DOCTYPE html>
<html>
<head>
	<title>Exercício 8</title>
	<meta charset="utf-8">
	<!--Faça um programa em php que mostre as quatro operações básicas realizadas com dois números inteiros.!-->
</head>
<body>
	<form method="GET" action="exer8.php">
		<h3>Operações básicas com dois números inteiros</h3><br><br>
		Digite o primeiro número: <input type="text" name="n1"><br>
		Digite o segundo número: <input type="text" name="n2"><br><br>
		<input type="submit" name="Enviar">
	</form>
	<?php 
		if (isset($_GET['n1']) && isset($_GET['n2'])) {
			$n1 = $_GET['n1'];
			$n2 = $_GET['n2'];
			$soma = $n1 + $n2;
			$sub = $n1 - $n2;
			$mult = $n1 * $n2;
			$div = $n1 / $n2;
			echo "As operações com $n1 e $n2:<br> Soma: $soma <br> Subtração: $sub<br>Multiplicação: $mult<br>Divisão: $div";
		} ;
	?>
</body>
</html>