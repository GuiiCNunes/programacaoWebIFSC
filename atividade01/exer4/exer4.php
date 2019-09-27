<!DOCTYPE html>
<html>
<head>
	<title>Celsius -> Fahrenheit</title>
	<meta charset="utf-8">
</head>
<body>
	<?php //Faça um programa em PHP que determine o valor em graus Fahrenheit, de uma dada temperatura expressa em graus Celsius. Fórmula/Processo: Fahrenheit = (9/5 *c) +32. 
		$cel = $_POST['cel'];

		echo "A temperatura de $cel graus celsius é igual a ".((9/5 *$cel) +32)." Fahrenheit";
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>