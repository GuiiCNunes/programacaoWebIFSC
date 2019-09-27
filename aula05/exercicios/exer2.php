<?php 
//Faça um programa em php que mostre a multiplicação de três números. Passar os valores pela url.
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$n3 = $_GET['n3'];
	$multi = $n1 * $n2 * $n3;
	echo "A multipiplicação de três valores é: $multi";
?>