<?php 
	/*1. Faça um programa em php que receba dois números inteiros e mostre:
		A) os números elevados a 5 potência
		B) a raiz quadrada dos números
		C) a soma dos números elevado a 5 potencia
		D) a raiz quadrada da soma dos numeros
	*/
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];

	echo "O número $n1 elevado a 5 potencia: ".pow($n1, 5)."<br>O número $n2 elevado a 5 potência: ".pow($n2, 5)."<br><br>";
	echo "A raiz quadrada de $n1 é: ".sqrt($n1)."<br>A raiz quadrada de $n2 é: ".sqrt($n2)."<br><br>";
	echo "A soma de $n1 e $n2 elevada a 5 potência: ".pow(($n1+$n2),5)."<br><br>";
	echo "A raiz quadrada da soma de $n1 e $n2: ".sqrt(($n1+$n2));

?>