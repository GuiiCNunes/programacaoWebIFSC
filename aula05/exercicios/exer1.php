<?php 
//Faça um programa em php que mostre a soma de três numeros. Passar os valores pela url.
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$n3 = $_GET['n3'];
	$soma = $n1 + $n2 + $n3;

	echo "A soma dos três números é: $soma";

?>