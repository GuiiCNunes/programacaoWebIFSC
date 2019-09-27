<!DOCTYPE html>
<html>
<head>
	<title>Resultado da Média de dois números</title>
	<meta charset="utf-8">
	<!--Faça um programa em php que mostre a media aritmética entre dois números.!-->
</head>
<body>
	<?php 
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		$media = ( $n1 + $n2 ) / 2 ;
		echo "A média entre $n1 e $n2 é $media";
	?>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>