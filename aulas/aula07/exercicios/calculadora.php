<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de dois números</title>
	<meta charset="utf-8">
	<!--Faça um programa em php que mostre as quatro operações básicas realizadas com dois números inteiros.!-->
</head>
<body>
	<?php 
		$n1 = $_GET['n1'] ;
		$n2 = $_GET['n2'] ;
		$soma = $n1+$n2 ; 
		$subtracao = $n1 - $n2 ;
		$divisao = $n1 / $n2 ;
		$multiplicacao = $n1 * $n2 ;

		echo "As 4 operações matemáticas com $n1 e $n2 <br> Soma: $soma <br> Subtração: $subtracao <br> Divisão: $divisao <br> Multiplicação: $multiplicacao <br>";
	?>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>