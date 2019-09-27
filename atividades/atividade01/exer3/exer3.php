<!DOCTYPE html>
<html>
<head>
	<title>Segundos faltantes</title>
	<meta charset="utf-8">
</head>
<body>
	<?php //Elabore um programa em PHP que receba o peso de uma pessoa (em g) e mostre esse peso em Kg.
		$gramas = $_POST['gramas'];

		echo "$gramas g = ".($gramas/1000)." kg";
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>