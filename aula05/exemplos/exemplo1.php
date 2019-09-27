<?php 
	echo "<h2>Somar três números quaisquer</h2> <br>";
	
	echo "Valor do primeiro numero: ".$_GET['n1']."<br>";
	echo "Valor do segundo numero: ".$_GET['n2']."<br>";
	echo "Valor do terceiro numero: ".$_GET['n3']."<br>";

	echo "A soma dos numeros é: ".($_GET['n1']+$_GET['n2']+$_GET['n3'])."<br>";

	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$n3 = $_GET['n3'];

	echo "Valor do primeiro numero: ".$n1."<br>";
	echo "Valor do segundo numero: ".$n2."<br>";
	echo "Valor do terceiro numero: ".$n3."<br>";
	echo "A soma dos numeros é: ".($n1+$n2+$n3)."<br>";
	
?>