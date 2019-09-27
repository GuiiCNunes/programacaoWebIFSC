<!DOCTYPE html>
<html>
<head>
	<title>Resultado Soma</title>
	<meta charset="utf-8">
</head>
<body>
	<?php /*Faça um programa em php que mostre a soma de três numeros.*/
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		$n3 = $_GET['n3'];
		$soma = $n1 + $n2 + $n3;
		echo "A soma de $n1 + $n2 + $n3 = $soma";
	?>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>