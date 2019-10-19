<?php 
	include("funcoes.inc.php");

	echo "A soma dos dois maiores valores é: ".somaultimos($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'])."<br>";
	echo "A quantidade de números pares é: ". contapares($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'])."<br>";
	echo "A quantidade de números impares é: ".contaimpares($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'])."<br>";
	echo "O número do meio é: ".domeio($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'])."<br>";
?>