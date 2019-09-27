<?php 
//Faça um programa em php que mostre as quatro operações básicas realizadas com dois números inteiros. As operações são soma, subtração, divisão e multiplicação. Passar os valores pela url
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$soma = $n1 + $n2;
	$subtr = $n1 - $n2;
	$div = $n1 / $n2;
	$multi = $n1 * $n2;
	echo "Os resultados das 4 operações básicas dos números $n1 e $n2 são: <br> Soma: $soma <br> Subtração: $subtr <br> Divisão: $div <br> Multiplicação: $multi";
?>