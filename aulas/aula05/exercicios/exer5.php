<?php 
//Faça um programa em php que mostre a media aritmética entre dois números. Passar os valores pela url.
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$media = ($n1+$n2)/2;

	echo "A média entre $n1 e $n2 é $media";
?>