<!DOCTYPE html>
<html>
<head>
	<title>Resultado Subtração</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  /* Faça um programa em php que mostre a subtracão de três números.  */
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		$n3 = $_GET['n3'];
		$subtracao = $n1 - $n2 - $n3;
		echo "A multiplicação de $n1 * $n2 * $n3 = $subtracao<br><br>";
	?>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>