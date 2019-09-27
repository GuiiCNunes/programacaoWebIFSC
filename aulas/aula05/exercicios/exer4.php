<?php 
//Faça um programa em php que mostre a divisão de três números. Passar os valores pela url.
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$n3 = $_GET['n3'];
	$div = $n1 / $n2 / $n3;
	echo "A divisão dos valores $n1 ,$n2 e $n3: $div";
?>